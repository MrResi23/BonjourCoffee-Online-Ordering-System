<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"/>
        <link rel="stylesheet" type="text/css" href='site.css?v=<%= DateTime.Now.Ticks %>' />
        <link rel="stylesheet" href="{{asset('css/header.css')}}">

        <style>
            .position{
                justify-content: center;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }

            .font {
                font-size: 20px;
            }

            .color {
                color: white;
                font-weight: bold;
            }

            .color:hover{
                color: white;
            }
        </style>
    </head>

	<body>
        <div class="header">
            <a class="logo">BonjourCoffee | Payment</a>
            <div class="header-right">
              <a href="/home">Homepage</a>
            </div>
        </div>

		<div class="container text-left">

			<div class="col-md-2 col-sm-12">
				<h1 style= "font-size:20px; font-weight:bold;">Pickup Address</h1>
                <img src="{{asset('img/Cafe_Map.jpeg')}}" alt="Richiamo Map" width="1100" height="200">
            </div>

        <div class="font col-md-11 col-sm-12">
                <h1 style= "font-size:20px;">Bonjour Cafe</h1>
                <p>No-2-g 5, D'Vida Business Centre,</p>

                <p>Bukit Megah, Shah Alam,</p>

                <p>Selangor.</p>
		</div>

        <!------ custom cart ------>

        <div class = "font small-contrainer cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>
                      <div class="cart-info">
                        <div>

                            {{-- Variable were fetched from MenuController --}}
                            @foreach ($menuID as $menuIDC)

                                <p>Menu ID: {{$menuIDC}} </p>

                            @endforeach

                            @foreach ($drinkName as $drinkNameC)

                                <p>Drink Name: {{$drinkNameC}}</p>

                            @endforeach

                            @foreach ($description as $descriptionC)

                                <p>Description: {{$descriptionC}}</p>

                            @endforeach

                            @foreach ($price as $priceC)

                                <p>Price: RM {{$priceC}}</p>

                            @endforeach

                            @foreach ($type as $typeC)

                                <p>Type: {{$typeC}}</p>

                            @endforeach

                        </div>
                      </div>
                    </td>

                    {{-- User will input quantity --}}
                    <form action="{{url('add/create')}}" method="POST">

                        @csrf
                        <td><input  name='quantity' type="number" value="1"></td>
                </tr>
            </table>
        </div>
        <br>
                        {{-- When user click 'Cash' button, it will route to 'paymentDetails' page --}}
                        <a class="color"> <button type="submit" class="order">Cash</button></a>
                    </form>
        <br><br>

        <!-- Include the PayPal JavaScript SDK; replace "test" with your own sandbox Business account app client ID -->
        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

        <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div>

        <script>

            paypal.Buttons({

                // Sets up the transaction when a payment button is clicked
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '77.44' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                            }
                        }]
                    });
                },

                // Finalize the transaction after payer approval
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {
                        // Successful capture! For dev/demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                        // When ready to go live, remove the alert and show a success message within this page. For example:
                        // var element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '';
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL:  actions.redirect('thank_you.html');
                    });
                }
            }).render('#paypal-button-container');

        </script>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>

		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/customjs.js')}}"></script>

	</body>
</html>


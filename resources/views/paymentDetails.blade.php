<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.tengah{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background-color: #b15b16;
    border-color: coral;
}

.tengah:hover{
    background-color: #DACC96;
    border-color: coral;
}

.back{
    background-color: #b15b16;
    border-color: coral;
}

.back:hover{
    background-color: #DACC96;
    border-color: coral;
}

.aa {
    padding-top: 245px;
    padding-left: 548;
}

</style>
<!-- Button trigger modal -->

<p class="aa"><b>Are you sure want to proceeed?</b></p> <br>

<div class="d-flex justify-content-center">

    <button type="button" class="tengah btn btn-primary col-sm-offset-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Proceed?
    </button>
</div>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex justify-content-center" id="staticBackdropLabel">Payment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class=" d-flex justify-content-center">
                <p class="heading"><b>Payment Succesfull !</b></p>
            </div>

            <img src="https://img.icons8.com/glyph-neue/64/000000/paid.png"
             data-toggle="modal"
             data-target="#exampleModal" class="center"/>

            <div class=" d-flex justify-content-center">
                <p> <strong>Your order has succesfully placed</strong></p>
            </div>

            <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Order ID</td>  {{-- Variable were fetched from OrderController --}}
                    <td style="text-align:right">
                        @foreach ($orderID as $orderIDC)

                        {{$orderIDC}}

                        @endforeach
                    </td>
                    <td><a><i class="fas fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>Menu Id</td>
                    <td style="text-align:right">
                        @foreach ($menuID as $menuIDC)

                        {{$menuIDC}}

                        @endforeach
                    </td>
                    <td><a><i class="fas fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>Quantity</td>
                    <td style="text-align:right">
                        @foreach ($quantity as $quantityC)

                        {{$quantityC}}

                        @endforeach
                    </td>
                    <td><a><i class="fas fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>Total Price</td>
                    <td style="text-align:right">RM
                        @foreach ($totalPrice as $totalPriceC)

                        {{$totalPriceC}}

                        @endforeach
                    </td>
                    <td><a><i class="fas fa-times"></i></a></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="modal-footer text-center">
            <p ><a href="/home" class=" back btn btn-primary">Back to Homepage</a></p>
        </div>
      </div>
    </div>
  </div>

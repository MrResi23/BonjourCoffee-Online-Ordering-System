<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    {{-- For font --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    {{-- For all css --}}
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/header.css">

  </head>
  <body>

    <div class="header">
        <a class="logo">BonjourCoffee | Homepage</a>
        <div class="header-right">
          <a href="/welcome">Back</a>
        </div>
    </div>

    <section style="background-image: url(img/hero_bg_4.jpg);" data-section="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
              <br><br><br><br><br><br><br>
            <img src="img/BonjourCoffee.png">
            <h2 style="color:white; text-align:center;">Our Menu</h2> {{-- Guna inline css sebab pening nak tuko kt css file--}}
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section">   {{-- !!!!!!!col-md-3 col-sm-3    kalau tuko 3 tu jadi 4/5/6, nanti saiz kotak makin beso--}}
      <div class="container"> {{--container untuk saiz grid menu--}}
        <div>
          <div class="col-md-3 col-sm-3">
            <div class="probootstrap-block-image">
              <figure><img src="img/coffee1.jpg"></figure>
              <div class="text"> {{--format text semua dalam grid--}}
                <span class="date">Type : Arabica</span> {{----date tkleh tuko nama sebab pening kat css--}}
                <h3><a>Caramel Arabica</a></h3>
                <p>Freshly steamed milk with Arabica bean, and finished with caramel sauce.</p>
                <h3>RM 13.40</h3>

                {{-- This button will route to 'cart' page of drink ID = 1 --}}
                <p style="text-align: center"><a href="/actionedit/1" class="probootstrap-custom-link link-sm">Order</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="probootstrap-block-image">
              <figure><img src="img/coffee_2.jpg"></figure>
              <div class="text">
                <span class="date">Type : Macchiato</span>
                <h3><a>Mosha Mocha Machiato</a></h3>
                <p>Steamed milk with bittersweet mocha sauce. Topped with thick foam.</p>
                <h3>RM 15.70</h3>
                <p style="text-align: center"><a href="/actionedit/2" class="probootstrap-custom-link link-sm">Order</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="probootstrap-block-image">
              <figure><img src="img/coffee3.jpg"></figure>
              <div class="text">
                <span class="date">Type : Latte</span>
                <h3><a>Cafe Latte</a></h3>
                <p>Rich with creamy flavor mix with steamed milk, lightly topped with foam.</p>
                <h3>RM 12.80</h3>
                <p style="text-align: center"><a href="/actionedit/3" class="probootstrap-custom-link link-sm">Order</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="probootstrap-block-image">
              <figure><img src="img/coffee4.jpg"></figure>
              <div class="text">
                <span class="date">Type : Ristretto</span>
                <h3><a>Ristretto Con Panna</a></h3>
                <p>A shot of espresso topped with thick foam. Steamed milk as major ingredient.</p>
                <h3>RM 11.60</h3>
                <p style="text-align: center"><a href="/actionedit/4" class="probootstrap-custom-link link-sm">Order</a></p>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-footer">
      <div>
            {{-- !!!!!Tak boleh guna selain h3 --}}
            <div>
              <h3 style="color:rgb(0, 0, 0); text-align:center;">Contact Us:</h3>
              <h3 style="color:rgb(0, 0, 0); text-align:center;">E-Mail: customer@BonjourCoffee.com.my</h3>
              <h3 style="color:rgb(0, 0, 0); text-align:center;">Hotline: 1300 00 0000</h3>
            </div>
      </div>
    </section>

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>

  </body>
</html>

@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Footer Icons -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: rgb(90, 73, 7)
            }

            section {
                width: 100%;
                display: inline-block;
                height: 90vh;
                text-align: center;
                font-size: 22px;
                font-weight: 700;
                }

            .carousel-inner {
                width: 2000px;
                height: 524px;
            }

            .antialiased {
                background-color: rgb(122, 112, 71)
            }

            .carousel-fade .carousel-item, .carousel-item img  {
                max-height: 90vh;
            }

        </style>

        <!-- Footer Styles -->
        <style>
            .footer-distributed {
                background-color: rgb(122, 112, 71);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
                box-sizing: border-box;
                width: 100%;
                text-align: left;
                font: normal 16px sans-serif;
                padding: 45px 50px;
            }

            /* Bonjour Coffee Copyright */
            .footer-distributed .footer-left p {
                color: #e2dcdc;
                font-size: 14px;
                margin: 0;
            }

            /* Links */
            .footer-distributed p.footer-links {
                font-size: 18px;
                font-weight: bold;
                color: #ffffff;
                margin: 0 0 10px;
                padding: 0;
                transition: ease .25s;
            }

            .footer-distributed p.footer-links a {
                display: inline-block;
                line-height: 1.8;
                text-decoration: none;
                color: inherit;
                transition: ease .25s;
            }

            .footer-distributed .footer-links a:before {
                content: "·";
                font-size: 20px;
                left: 0;
                color: #fff;
                display: inline-block;
                padding-right: 5px;
            }

            .footer-distributed .footer-links .link-1:before {
                content: none;
            }

            .footer-distributed .footer-right {
                float: right;
                margin-top: 6px;
                max-width: 180px;
            }

            /* Social Icons Box */
            .footer-distributed .footer-right a {
                display: inline-block;
                width: 35px;
                height: 35px;
                background-color: rgb(187, 176, 127);
                border-radius: 2px;
                font-size: 20px;
                color: #ffffff;
                text-align: center;
                line-height: 35px;
                margin-left: 3px;
                transition:all .25s;
            }

            .footer-distributed .footer-right a:hover{
                transform:scale(1.1);
                -webkit-transform:scale(1.1);
            }

            .footer-distributed p.footer-links a:hover{
                text-decoration:underline;
            }

            /* Media Queries */

            @media (max-width: 600px) {
                .footer-distributed .footer-left,
                .footer-distributed .footer-right {
                        text-align: center;
                }
                .footer-distributed .footer-right {
                    float: none;
                    margin: 0 auto 20px;
                }
                .footer-distributed .footer-left p.footer-links {
                    line-height: 1.8;
                }
            }
        </style>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="antialiased">
        <section>
            <br>
            <div class="container-lg my-3">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/banner.jpg" alt="Slide 1">

                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/2074130/pexels-photo-2074130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Slide 2">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/2079438/pexels-photo-2079438.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Slide 3">
                        </div>
                    </div>

                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
		<footer class="footer-distributed">
			<div class="footer-right">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-whatsapp"></i></a>
			</div>

			<div class="footer-left">
				<p class="footer-links">
					<a class="link-1" href="#">About</a>
					<a href="#">Contact</a>
				</p>

				<p class="copyright">Bonjour Coffee &copy; 2022</p>

			</div>
		</footer>
    </body>
</html>
@endsection

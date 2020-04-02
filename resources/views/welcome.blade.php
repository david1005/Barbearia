<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Felipe Barbearia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.timepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}"> 
     <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    
    

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="index.html"><span></span>Felipe Barbearia</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                    @auth
                       <li class="nav-item "> <a class="nav-link" href="{{ url('/home') }}">Home</a></li> 
                    @else
                      
                    <li class="nav-item "> <a class="nav-link" href="{{ url('/home') }}">Home</a></li> 
                      <li class="nav-item">   <a class="nav-link" href="{{ route('login') }}">Galeria</a></li>
    
                        <li class="nav-item">  <a class="nav-link" href="{{ route('login') }}">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a> </li>
                        @if (Route::has('register'))
                        <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                     @endif
                </ul>
            </div>
            </div>
          </nav>

          <section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-12 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Bem-Vindos a Barbearia do Felipe</span>
                                <h1 class="mb-4">Cuidados profissionais para o seu cabelo</h1>
                                <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">Agende agora</a></p>
                                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 

          <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/formen.jpg);">
							<div class="text">
								<h3>Para Homens</h3>
								<p><a href="#" class="btn-custom">Ver preços <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex align-items-stretch">
						<div class="text-about py-5 px-4">
							<h1 class="logo">
								<a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Haircare</a>
							</h1>
							<h2>Bem-vindo ao nosso salão</h2>
							<p>Um pequeno rio chamado Duden flui por seu lugar e fornece a regelialia necessária. É um país paradisíaco, no qual partes torradas das frases voam para sua boca. Muito longe, atrás da palavra montanhas, longe dos países Vokalia e Consonantia, vivem os textos cegos.</p>
							<p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">Consulte Mais informação</a></p>
						</div>
					</div>
					<div class="col-md text-center d-flex align-items-stretch">
						<div class="services-wrap d-flex align-items-center img" style="background-image: url(images/formen.jpg);">
							<div class="text">
								<h3>Para Homens</h3>
								<p><a href="#" class="btn-custom">Ver preços <span class="ion-ios-arrow-round-forward"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <section class="services-section ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Serviços</span>
                  <h2 class="mb-4">Serviços Menu</h2>
                  <p>Muito longe, atrás da palavra montanhas, longe dos países Vokalia e Consonantia</p>
                </div>
              </div>
              <div class="row no-gutters d-flex">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Corte de cabelo &amp; Stilização</h3>
                      <p>Um pequeno rio chamado Duden flui por seu lugar e suprimentos.</p>
                    </div>
                  </div>    
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-beard"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3">Barba</h3>
                      <p>Um pequeno rio chamado Duden flui por seu lugar e suprimentos.</p>
                    </div>
                  </div>      
                </div>                                
              </div>
            </div>
          </section>

         


          


        
    <footer class="ftco-footer ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo">Cuidado capilar</h2>
                <p>Muito longe, atrás da palavra montanhas, longe dos países Vokalia e Consonantia, vivem os textos cegos.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Em formação</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQs</a></li>
                  <li><a href="#" class="py-2 d-block">Privacidade</a></li>
                  <li><a href="#" class="py-2 d-block">Termos e Condições</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Home</a></li>
                  <li><a href="#" class="py-2 d-block">Galeira</a></li>
                  <li><a href="#" class="py-2 d-block">Serviços</a></li>
                  
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

            
    </body>
</html>

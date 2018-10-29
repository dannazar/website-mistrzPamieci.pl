<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>MistrzPamieci.pl</title>

	<meta name="description" content="http://mistrzpamieci.pl">
	<meta name="keywords" content="ćwiczenie pamięci, pamięć, trenuj pamięć">
	<meta name="author" content="Danuta Nazarewska Dorota Turkowska Dariusz Szydłowski">



	<!-- Styles	-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="fontello/css/fontello.css">


	<!--	<link rel="stylesheet " href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=" sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm " crossorigin=" anonymous ">-->


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="fluid-gallery.css">

	<script>
		jQuery(function($)) {
		//reset scroll
		$.scrollTo(0);
		$('#stopScrollup').click(function() {
			$.scrollTo($('#'), 500);
		});
		$('.scrollup').click(function() {
			$.scrollTo($('body'), 1000);
		});
		});
		//show during scrolling
		$(window).scroll(function() {
			if ($(this).scrollTop() > 500) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();
		});
	</script>
</head>


<body>

	<!--    LOGO I NAZWA STRONY   -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="oNas" id="techniki" id="cwiczenia">
		<a class="navbar-brand" href="">


			<div class="container">
				<div class="row">
					<div class="d-none d-sm-block">
						<i class="fas fa-brain fa-2x mr-4 d-inline-block font-light"></i>

					</div>
					<div class="d-none d-sm-block d-xl-block d-lg-block">
						<h2>MistrzPamieci.pl</h2>
					</div>

				</div>
			</div>
		</a>
		<!--ROZWIJALNE MENU-->


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					
					<a class="nav-link text-uppercase" href="index.php?id=1">Strona główna<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Techniki pamięci
        </a>
						<div class="dropdown-menu mydropdown-menu" style="background: #dad7eb; " aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item " href="index.php?id=2">Mapy myśli</a>
							<a class="dropdown-item" href="index.php?id=3">Akronimy</a>
							<a class="dropdown-item" href="index.php?id=4">Rymowanki</a>
							<a class="dropdown-item" href="index.php?id=5">Łańcuchowa metoda skojarzeń</a>
							<a class="dropdown-item" href="index.php?id=6">Haki pamięciowe</a>

						</div>
					</li>

					<li class="nav-item dropdown">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ćwiczenia
        </a>
							<div class="dropdown-menu mydropdown-menu" style="background: #dad7eb;" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="index.php?id=10">Liczba |POZIOM 1|</a>
								<a class="dropdown-item" href="index.php?id=11">Liczba |POZIOM 2|</a>
								<a class="dropdown-item" href="index.php?id=12">Liczba |POZIOM 3|</a>
								<a class="dropdown-item" href="index.php?id=13">Rozszyfruj zawody</a>
								<a class="dropdown-item" href="index.php?id=14">Jak się nazywam</a>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-uppercase" href="index.php?id=16">O nas</a>
							
						</li>
			</ul>
		</div>
	</nav>




	<!--Karuzela-->

	<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide .hidden-sm" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="7"></li>


			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/slider2.png" alt="First slide" alt="First slide">
					<div class="carousel-caption d-none d-md-block my-carousel-quote">
						<h1 class="text-light ">Umysł <br>w świetnej kondycji,<br> tak jak Twoje mięśnie!</h1>
					</div>
				</div>


				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Second slide" alt="Second slide">
					<div class="carousel-caption d-none d-md-block my-carousel-quote ">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Świat nie jest piłką footbolową. <br> Świat się podbija <br> głową! głową! głową!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Antoni Słonimski</i></p>
					</div>
				</div>


				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Third slide" alt="Third slide">
					<div class="carousel-caption d-none d-md-block my-carousel-quote">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Nasz mózg może <br>nieustannie się uczyć, <br> od urodzenia, aż po kres życia!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Marian Diamond</i></p>
					</div>
				</div>


				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Fourth slide" alt="Fourth slide">
					<div class="carousel-caption d-none d-md-block ">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Nauka jest <br>najbardziej efektywna, <br> kiedy sprawia radość!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Peter Kline</i></p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Fifth slide" alt="Fifth slide">
					<div class="carousel-caption d-none d-md-block my-carousel-quote">

						<div class="display-3 text-danger font-weight-bold" style="text-shadow: 2px 2px 0 #fff, -2px 2px 0 #fff,-2px -2px 0 #fff, 2px -2px 0 #fff; 
						letter-spacing: 5">Proszę czekać, <br>trwa usuwanie <br>plików z pamięci!</div>


					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Sixth slide" alt="Sixth slide">
					<div class="carousel-caption d-none d-md-block ">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Pamiętaj <br>o zachowaniu równowagi <br>w trudnych chwilach!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Horacy</i></p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Seventh slide" alt="Seventh slide">
					<div class="carousel-caption d-none d-md-block ">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Dobrze ten schował, <br>kto schował w pamięci!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Alighieri Dante</i></p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider2.png" alt="Eight slide" alt="Eight slide">
					<div class="carousel-caption d-none d-md-block ">
						<h1 class="text-light"><i class="icon-quote-left"></i>&nbsp;Głowa bez pamięci, <br>to twierdza bez garnizonu!&nbsp;<i class="icon-quote-right"></i></h1>
						<p><i>Napoleon Bonaparte</i></p>
					</div>
				</div>


			</div>


			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
		</div>
	</div>



	<div class="container mx-auto" id="tresc">


		<?php
     if (!isset($_GET["id"])) {$_GET["id"] = 1;}
  
  
  
   if ($_GET["id"] == 1) {include ("podstrony/strona_glowna.html");}
   if ($_GET["id"] == 2) {include ("podstrony/mapy_mysli.html");}
   if ($_GET["id"] == 3) {include ("podstrony/akronimy.html");}
   if ($_GET["id"] == 4) {include ("podstrony/rymowanki.html");}
   if ($_GET["id"] == 5) {include ("podstrony/lancuchowa_metoda_skojarzen.html");}
   if ($_GET["id"] == 6) {include ("podstrony/haki_pamieciowe.html");}
//   if ($_GET["id"] == 7) {include ("podstrony/techniki_6.html");}
//   if ($_GET["id"] == 8) {include ("podstrony/techniki_7.html");}
//   if ($_GET["id"] == 9) {include ("podstrony/techniki_8.html");}
   if ($_GET["id"] == 10) {include ("podstrony/liczba_poz_1.html");}
   if ($_GET["id"] == 11) {include ("podstrony/liczba_poz_2.html");}
   if ($_GET["id"] == 12) {include ("podstrony/liczba_poz_3.html");}
   if ($_GET["id"] == 13) {include ("podstrony/rozszyfruj_zawody.html");}
   if ($_GET["id"] == 14) {include ("podstrony/jak_sie_nazywam.html");}
//   if ($_GET["id"] == 15) {include ("podstrony/cwiczenia_6.html");}
   if ($_GET["id"] == 16) {include ("podstrony/o_nas.html");}
	  
      ?>


			<script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin=" anonymous "></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity=" sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin=" anonymous "></script>


			<script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity=" sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin=" anonymous "></script>



			<script src="js/bootstrap.min.js"></script>

			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127460509-1"></script>
			<script>
				window.dataLayer = window.dataLayer || [];

				function gtag() {
					dataLayer.push(arguments);
				}
				gtag('js', new Date());

				gtag('config', 'UA-127460509-1');
			</script>


			<script>
				(function(i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r;
					i[r] = i[r] || function() {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date();
					a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-127460509-1', 'auto');
				ga('send', 'pageview');
			</script>

			<script>
				baguetteBox.run('.tz-gallery');
			</script>

</body>

</html>
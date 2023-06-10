<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title></title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>0626789056</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
				<a href="{{ url('/') }}"></a>
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">_CLR</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
		
					

			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->



<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
					<a href="{{ url('/') }}">Home</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Louer <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Ctaegories:</li>
										<li role="separator" class="divider"></li>
										<li><a href="{{ url('/objets/1') }}">Automobile</a></li>
										<li><a href="{{ url('/objets/2') }}">Immobilier</a></li>
										<li><a href="{{ url('/objets/3') }}">Electronics</a></li>
										

									</ul>
								</div>

							

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Pages <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="{{ url('/contact') }}">Contact Us</a></li>
										<li><a href="{{ url('/about') }}">About Us</a></li>
										<li><a href="{{ url('/404') }}">404 Page</a></li>
										<!-- <li><a href="{{ url('/coming-soon') }}">Coming Soon</a></li> -->
										<li><a href="{{ url('/faq') }}">FAQ</a></li>
									</ul>
								</div>




								<!-- Contact -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Dashboard</li>
										<li role="separator" class="divider"></li>
										<li><a href="{{ url('/dashboard_client') }}">User Interface</a></li>
										<li><a href="{{ url('/order') }}">Orders</a></li>
									
										<li><a href="{{ url('/profile-details') }}">Profile Details</a></li>
									</ul>
								</div>

								<!-- Utility -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Utility</li>
										<li role="separator" class="divider"></li>
										
									
										<li><a href="{{ url('/forget-password') }}">Forget Password</a></li>
									</ul>
								</div>

								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
								<a href="{{ url('/shop') }}">
										<img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->



					<!-- Blog -->
					<!-- <li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Blog <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/blog-left-sidebar') }}">Blog Left Sidebar</a></li>
							<li><a href="{{ url('/blog-right-sidebar') }}">Blog Right Sidebar</a></li>
							<li><a href="{{ url('/blog-width-sidebar') }}">Blog Full Width</a></li>
							<li><a href="{{ url('/blog-grid') }}">Blog 2 Columns</a></li>
							<li><a href="{{ url('/blog-single') }}">Blog Single</a></li>
						</ul>
					</li> -->
					<!-- / Blog -->



			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">About Us</h1>
					<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">about us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="images/about/about.jpg">
			</div>
			<div class="col-md-6">
				<h2 class="mt-40">About Us</h2>
				<p>Notre plateforme offre une solution pratique et économique pour les personnes qui souhaitent louer des objets plutôt que de les acheter. En offrant une grande variété d'objets à louer, allant des équipements de plein air aux outils de bricolage, en passant par les appareils électroménagers et les accessoires de fête, notre plateforme permet aux utilisateurs de trouver facilement ce dont ils ont besoin sans avoir à dépenser de grosses sommes d'argent pour l'acheter. En outre, notre plateforme offre un processus de location simple et convivial, permettant aux utilisateurs de réserver en quelques clics et de planifier leur location en toute tranquillité. Nous sommes déterminés à offrir à nos clients une expérience de location agréable et à faciliter l'accès à des objets pratiques pour tous les besoins de la vie quotidienne.</p>
				
			</div>
		</div>
		
	</div>
</section>
<section class="team-members ">
	<div class="container">
		<div class="row">
			<div class="title"><h2>Team Members</h2></div>
		</div>
		<center><div class="row">
			<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/4.png') }}" alt="team1" width="150">
					<h4>El Hor Taha</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/6.png') }}" alt="team1" width="150">
					<h4>Ghada Jamal</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/2.png') }}" alt="team1" width="150">
					<h4>Dakak Fatima</h4>
				</div>
			</div>
			</div></center>
			<center><div class="row">
			<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/5.png') }}" alt="team1" width="150">
					<h4>Guachour Ayoub</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/1.png') }}" alt="team1" width="150">
					<h4>El Makhroubi Asmae</h4>
				</div>
			</div>
				<div class="col-md-4">
				<div class="team-member text-center">
					<img src="{{ url('images/team/3.png') }}" alt="team1" width="150">
					<h4>Sakhri Souhaila</h4>
				</div>
			</div>
		</div></center>
	</div>
</section>
<br><br><br>





<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="#">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
			
				<p class="copyright-text">Copyright &copy;2023, Designed &amp; Developed by <a href="">CLR</a></p>
			</div>
		</div>
	</div>
</footer>

    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>



  </body>
  </html>

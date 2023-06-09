@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        </div>
    </div>
</div>


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
  <link rel="stylesheet" href="../../css/style.css">
<!--fonteawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body id="body">
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
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
		
                    <ul class="text-center cart-buttons">
									<li><a href="{{ url('/partenaire') }}"class="btn btn-small">Mode Partenaire</a></li>
									<li><a href="{{ url('/client') }}" class="btn btn-small btn-solid-border">Mode Client</a></li>
						</ul>



				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home /</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="col-sm-12">
  <center>
    <ul class="list-inline dashboard-menu  mt-2">
      <li class="list-inline-item"><a href="{{ url('/partenaire') }}" class="text-decoration-none text-dark">Dashboard</a></li>
      <li class="list-inline-item"><a href="{{ url('/order') }}" class="text-decoration-none text-dark">Réservations reçus</a></li>
      <li class="list-inline-item"><a href="{{ url('/addad') }}" class="text-decoration-none active">Ajouter Annonce</a></li>
      <li class="list-inline-item"><a href="{{ url('/partenaire/addobjet') }}" class="text-decoration-none text-dark">Ajouter Objet</a></li>
      <li class="list-inline-item"><a href="{{ url('/profile-details') }}" class="text-decoration-none text-dark">Profile Details</a></li>
      <li class="list-inline-item"><a href="{{ url('/reviews_partenaire') }}" class="text-decoration-none text-dark">Reviews</a></li>
      <li class="list-inline-item"><a href="{{ url('/eval_partenaire') }}" class="text-decoration-none text-dark">Feedbacks</a></li>

    </ul>
  </center>
  </div>
<section class="products section">
    <div class="container">
        <div class="row">

        <!-- Modal -->
        <div class="modal product-modal fade" id="product-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tf-ion-close"></i>
            </button>
              <div class="modal-dialog " role="document">
                <div class="modal-content">
                      <div class="modal-body">
                        <div class="row">

                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="modal-image">
                                    <img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-short-details">

                                    <h2 class="product-title"></h2>
                                    <p class="product-price"></p>

                                    <p class="product-short-description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
                                    </p>
                                    <a href="{{ url('/cart') }}" class="btn btn-main">Add To Cart</a>
                                    <a href="{{ url('/product-single') }}" class="btn btn-transparent">View Product Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div><!-- /.modal -->
        </div>
    </div>


</section>
            <!-- <nav>
        <img class="wave" src="images/wave.png">
            <div class="navbar-brand">CollabRent</div>
            <ul class="navbar-menu">
                <li><a href="#">About</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="navbar-login" >
            <a href="includes/logout.inc.php">Log out</a>
            </div>
    </nav> -->

    <div class="container">
        <div class="row">
          <center>
          @foreach ($cat as $item)
          <div class="col-md-4 mb-3">
            <a href="{{ route('addad', ['identifiant' => $item->id_categorie]) }}">
              <button type="button" class="btn btn-primary btn-block btn-lg">{{ $item->categorie }}</button>
            </a>
          </div>
          @endforeach
          </center>
        </div>
      </div>


    <script type="text/javascript" src="contact/js/main.js"></script>




      <script>
          const categorySelect = document.getElementById('category');
              const formGroups = document.querySelectorAll('.form-group');
              function showFields() {
              const selectedCategory = categorySelect.value;
              formGroups.forEach(formGroup => {
                  if (formGroup.classList.contains(selectedCategory)) {
                  formGroup.style.display = 'block';
                  } else {
                  formGroup.style.display = 'none';
                  }
              });
              }
              categorySelect.addEventListener('change', showFields);
      </script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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

@endsection


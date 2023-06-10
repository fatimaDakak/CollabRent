   
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
  <link rel="stylesheet" href="css/style.css">
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
									<li><a href="{{ url('/partenaire') }}"class="btn btn-small btn-solid-border">Mode Partenaire</a></li>
									<li><a href="{{ url('/dashboard_client') }}" class="btn btn-small ">Mode Client</a></li>
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
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="col-md-12">
<ul class="list-inline dashboard-menu text-center">
      <li><a  href="{{ url('/dashboard_client') }}">Dashboard</a></li>
      <li><a  href="{{ url('/order_envoyer') }}">Réservations envoyés</a></li>
      <li><a  href="{{ url('/profile-details') }}">Profile Details</a></li>
	  <li><a  class="active" href="{{ url('/reviews_client') }}">Reviews</a></li>
	  <li ><a  href="{{ url('/eval_client') }}" >Feedbacks</a></li>
    </ul>
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


<div class="container">
    @if($evaluations->count() > 0)
        @foreach($evaluations as $eval)
            <div class="review">
                <h4>Feedback {{$eval->id_eval_client}}</h4>
                <div class="stars">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $eval->note)
                            <i class="fa fa-star"></i>
                        @else
                            <i class="fa fa-star-o"></i>
                        @endif
                    @endfor
                </div>
                <div class="comment">
                    {{ $eval->comment }}
                </div>
                <div class="client-info">
                    <p>Partner: {{ $eval->partenaire->nom}} {{ $eval->partenaire->prenom }}</p>
                    <!-- Add more client information as needed -->
                </div>
            </div>
        @endforeach
    @else
	<center><h4>You have no reviews at the moment</h4></center>
    @endif
</div>

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

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
 {{-- <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/eval.css">

<!--fonteawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body id="body">
<section class="top-header">
	<div class="container mb-5">
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
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Cart</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="{{ url('/') }}"class="btn btn-small">View Cart</a></li>
								<li><a href="{{ url('/checkout') }}" class="btn btn-small btn-solid-border">Checkout</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>

					</li><!-- / Search -->
                    <ul class="text-center cart-buttons">
									<li><a href="{{ url('/partenaire') }}"class="btn btn-small">Mode Partenaire</a></li>
									<li><a href="{{ url('/dashboard_client') }}" class="btn btn-small btn-solid-border">Mode Client</a></li>
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
						<li class="active">My account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<br>

<div class="col-sm-12">
    <ul class="list-inline dashboard-menu  mt-2">
    <center>  <li class="list-inline-item"><a href="{{ url('/partenaire') }}" class="text-decoration-none ">Dashboard</a></li>
      <li class="list-inline-item"><a href="{{ url('/order') }}" class="text-decoration-none ">Réservations reçus</a></li>
      <li class="list-inline-item"><a href="{{ url('/partenaire/addadfirst') }}" class="text-decoration-none ">Ajouter Annonce</a></li>
      <li class="list-inline-item"><a href="{{ url('/addobjet') }}" class="text-decoration-none ">Ajouter Objet</a></li>
      <li class="list-inline-item"><a href="{{ url('/profile-details') }}" class="text-decoration-none ">Profile Details</a></li>
      <li class="list-inline-item"><a href="{{ url('/reviews_partenaire') }}" class="text-decoration-none  ">Reviews</a></li>
	  <li class="list-inline-item"><a  href="{{ url('/eval_partenaire') }}" class="text-decoration-none  active">Feedbacks</a></li>
      </center>
    </ul>
  </div>
<br><br>

  <div class="container">
    <table class="table  mt-2">
        <thead>
            <tr>
                <th>Form number</th>
                <th>Client name</th>
                <th>Object rented</th>
                <th>Fill the form</th>
            </tr>
        </thead>
        <tbody>
            @if($reservation)
                @foreach ($reservation as $reservationItem)
                    <tr>
                        <td>{{$reservationItem->id}}</td>
                        <td>{{$reservationItem->client->nom}} {{$reservationItem->client->prenom}}</td>
                        <td>{{$reservationItem->annonce->objet->nom_objet}}</td>

                        <td>

                            <button id="fill-btn" data-bs-toggle="modal" data-bs-target="#fill">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">
                        <center>Pas de formulaire en attente pour aujourd'hui.</center>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!--modal form-->
<div class="modal fade" id="fill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fill">Evaluation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="eval-form" action="/eval_client" method="post">
                @csrf
                    <h4>Client evaluation </h4>
                    <label>How would you rate your client's sympathy in regards to renting you an object?</label>
                    <select name="symp" id="symp" class="form-control">
                      <option selected disabled @required(true)>--choose--</option>
                      <option value="Not sympathetic at all">Not sympathetic at all</option>
                      <option value="Somewhat sympathetic">Somewhat sympathetic</option>
                      <option value="Moderately sympathetic">Moderately sympathetic</option>
                      <option value="Very sympathetic">Very sympathetic</option>
                      <option value="Extremely sympathetic">Extremely sympathetic</option>
                    </select>


                    <h4>Additional Comments</h4>
                    <p>Please provide any additional comments or feedback:</p>

                    <textarea name="comment" rows="5" class="form-control"></textarea>

                    <input id="submit-evaluation-btn'" type="submit" class="btn btn-secondary mt-4" value="Evaluate">
                  </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
 $(document).ready(function() {
    // Get the CSRF token value
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Attach a submit event handler to the form
    $('#eval-form').submit(function(event) {
      // Prevent the form from submitting normally
      event.preventDefault();

      // Disable the submit button
      $('#submit-evaluation-btn').prop('disabled', true);

      // Get the form data
      var formData = $(this).serialize();

      // Send an AJAX request to the server
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        headers: {
          'X-CSRF-Token': csrfToken
        },
        data: formData,
        success: function(data) {
          // Reset the form and enable the submit button
          $('#eval-form')[0].reset();

          $('#submit-evaluation-btn').prop('disabled', true);

          // Display a success message to the user
          alert('Evaluation submitted successfully.');
          // Disable the "Fill evaluation" button
          $('#fill-btn').prop('disabled', true);
        },
        error: function(xhr, textStatus, errorThrown) {
          // Enable the submit button and display an error message to the user
          $('#submit-evaluation-btn').prop('disabled', false);
          alert('Failed to submit the evaluation. Please try again later.');
        }
      });
    });
  });
</script>







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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>
</html>

@endsection

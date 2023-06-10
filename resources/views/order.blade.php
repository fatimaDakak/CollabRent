@extends('layouts.app')
@section('content')
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
  <link rel="shortcut icon" type="image/x-icon" href="shop/cart/favicon.png" />
  
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
   
<script type="text/javascript" src="js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.signature.css">


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
 
	<!-- Add this CSS to your stylesheet -->
	<style>
						.modal {
						display: none; /* Hide the modal by default */
						position: fixed; /* Stay in place */
						z-index: 1; /* Sit on top */
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						overflow: auto; /* Enable scroll if needed */
						background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
						}

						.modal-content {
						background-color: #fefefe;
						margin: 15% auto; /* 15% from the top and centered */
						padding: 20px;
						border: 1px solid #888;
						width: 80%; /* Could be more or less, depending on screen size */
						}

						

						#confirm-button {
						display: block;
						margin: 0 auto;
						}

						.signature-pad {
						border: 1px solid #ccc;
						width: 27%;
						height: 150px;
						position: relative;
						}

						.signature-pad canvas {
						position: absolute;
						left: 0;
						top: 0;
						}
						</style>
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
									<li><a href="{{ url('/dashboard_client') }}" class="btn btn-small btn-solid-border">Mode Client</a></li>
						</ul>
						<!-- Search -->




				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
					

			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->
<!-- ///hnaya fin katazad navbar -->



<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Objets Demandés</h1>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="user-dashboard page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
			<ul class="list-inline dashboard-menu text-center">
			<li><a  href="{{ url('/partenaire') }}">Dashboard</a></li>
			<li><a class="active" href="{{ url('/order') }}">Réservations reçus</a></li>
			<li><a href="{{ url('/partenaire/addadfirst') }}">Ajouter Annonce</a></li>
			<li><a href="{{ url('/addobjet') }}">Ajouter Objet</a></li>
			<li><a  href="{{ url('/profile-details') }}">Profile Details</a></li>
			<li><a  href="{{ url('/reviews_partenaire') }}">Reviews</a></li>
			<li><a  href="{{ url('/eval_partenaire') }}">Feedbacks</a></li>
			</ul>
                <div class="dashboard-wrapper user-dashboard">
                    <div class="table-responsive">
						@if($reservations && $reservations->count() > 0)
                        <table class="table">
							
                            <thead>
                                <tr>
                                    <th>ID_Objet</th>
									<th>Nom Client</th>
                                    <th>Date Debut</th>
									<th>Date Fin</th>
                                    <th>Nom Objet</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
						 <script>
							$(document).ready(function() {
								// Initial call to get current number of rows
								var currentRows = $('#reservationTable tbody tr').length;
								setInterval(function() {
									// Check for new rows and add special class
									$.get('{{ route('reservations.newRows') }}',function(response) {
										var newRows = response - currentRows;
										if (newRows > 0) {
											$('#reservationTable tbody tr').slice(0, newRows).addClass('new-row');
											currentRows += newRows;
										}
									});
								}, 5000); // Check every 5 seconds
							});

						</script> 
                            <tbody>
								@foreach($reservations as $reservation)
								<tr @if($reservation->isNew() && $reservation->status == 'pending') class="table-warning" @endif>
									<td>#{{ $reservation->id }}</td>
									<td><a href="{{ route('client.profile', ['id_Client' => $reservation->id_client]) }}">{{ $reservation->Client->nom }}</a></td>
									<td>{{ $reservation->date_debut_client }}</td>
									<td>{{ $reservation->date_fin_client}}</td>
									<td>{{ $reservation->objet->nom_objet }}</td>
									<td>{{ $reservation->status }}</td>
									<td>
									<form method="POST" action="{{ route('reservations.update1', $reservation->id) }}">
										@csrf
										@method('PUT')
										<input type="hidden" name="status" value="accepted">
										<input type="hidden" name="id_annonce" value="{{ $reservation->id_annonce}}"><br>
					                    <input type="hidden" name="id_partenaire" value="{{ $reservation->id_partenaire}}"><br>
										<button type="button" class="btn btn-success accept-button" style="background-color: green; width: 100px;"  {{ $reservation->status === 'accepted' || $reservation->status === 'refused' ? 'disabled' : '' }}   >Accepter</button>
										<div id="modal-{{ $reservation->id }}" class="modal">
										<div class="modal-content">       
										<button type="button" class="btn btn-danger cancel-button" style="background-color: red; width: 100px;" data-id="{{ $reservation->id }}">Annuler</button> 
										<center><h3><strong>Contrat de location</strong></h3></center>
										<p>Entre  <strong>{{ Auth::user()->name }}</strong>, ci-après dénommé le Partenaire, et <strong></strong>, ci-après dénommé le Partenaire, il est convenu ce qui suit :</p>
										<p>1.    Le Client s'engage à réserver l'objet décrit ci-dessous auprès du Partenaire pour la période de location spécifiée.</p>
										<p>2.    Le Partenaire s'engage à mettre l'objet à la disposition du Client pour la période de location spécifiée, dans les conditions décrites ci-dessous.</p>
										<p>3.    L'objet réservé est le suivant : <strong> </strong></p>
										<p>4.    La période de location est du [date de début] au [date de fin], pour une durée totale de [nombre de jours] jours..</p>
										<p>5.    Le Client est responsable de l'objet loué pendant la durée de la location, et s'engage à le maintenir en bon état et à le restituer dans les mêmes conditions qu'à la prise en charge.</p>
										<p>6.    Le Client s'engage à respecter les conditions de location spécifiées par le Partenaire, y compris les instructions d'utilisation et de sécurité pour l'objet loué.</p>
										<p>7.    Le Partenaire se réserve le droit de facturer des frais supplémentaires pour toute utilisation abusive ou pour toute détérioration de l'objet loué.</p>
										<p>8.    Le présent contrat de réservation d'objet est conclu pour une durée déterminée et prend effet à compter de la signature du Client.</p>
										<center><p>Votre Signature </p></center>
                                <br/>
								<div id="sig-{{ $reservation->id }}">
								<canvas id="signature-pad-{{ $reservation->id }}" class="signature-pad" width="400" height="200"></canvas>
					</div>
					<br/>
					<button type="button" id="clear-{{ $reservation->id }}" class="btn btn-danger btn-sm">Clear</button> 
					<textarea id="signature-{{ $reservation->id }}" name="signed" style="display: none"></textarea>
					<br/>
					<button  id="confirm-button-{{ $reservation->id }}" class="btn btn-primary">Confirmer la réservation</button>
						</div>
						</div>
						<script>
					var canvas = document.getElementById('signature-pad-{{ $reservation->id }}');
					var signaturePad = new SignaturePad(canvas);
					document.getElementById('clear-{{ $reservation->id }}').addEventListener('click', function() {
						signaturePad.clear();
					});
					document.getElementById('sig-{{ $reservation->id }}').addEventListener('touchstart', function(e) {
						e.preventDefault();
					}, false);
					document.getElementById('sig-{{ $reservation->id }}').addEventListener('mousedown', function(e) {
						e.preventDefault();
					}, false);
					document.getElementById('confirm-button-{{ $reservation->id }}').addEventListener('click', function(e) {
						var data = signaturePad.toDataURL();
						document.getElementById('signature-{{ $reservation->id }}').value = data;
					});
				</script>
					<!-- Add this JavaScript to your script file -->
					<script>			
						// When the user clicks the accept button, open the corresponding modal
						$('.accept-button').click(function() {
							var modal = $(this).siblings('.modal'); // get the modal associated with the clicked accept button
							modal.show(); // show the modal
						});
						$('.cancel-button').click(function() {
							var modal = $(this).closest('.modal'); // get the modal containing the clicked cancel button
							modal.hide(); // hide the modal
							window.location.reload(); // reload the page
						});
					</script>
					
									</form>
									<form method="POST" action="{{ route('reservations.update1', $reservation->id) }}">
										@csrf
										@method('PUT')
										<input type="hidden" name="status" value="refused">
										<button class="btn btn-danger" style="background-color: red; width: 100px;" {{ $reservation->status === 'accepted' || $reservation->status === 'refused' ? 'disabled' : '' }}>Refuser</button>
									</form>
								</td>
								</tr>
							@endforeach
                            </tbody>
                        </table>
						@else
						<p>No reservations found.</p>
					@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="{{ url('/contact-single') }}">CONTACT</a>
					</li>
					<li>
						<a href="{{ url('/shop-single') }}">SHOP</a>
					</li>
					<li>
						<a href="{{ url('/pricing') }}">Pricing</a>
					</li>
					<li>
						<a href="{{ url('/contact') }}">PRIVACY POLICY</a>
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
@endsection

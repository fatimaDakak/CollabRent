@extends('layouts.app')
@section('content')
<!DOCTYPE html>

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
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
  
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
						.custom-class {
  max-width: 90px;
  max-height: 90px;
  object-fit: cover; /* to prevent image distortion */
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
<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/shop') }}">Shop</a></li>
					<li class="active">Single Product</li>
				</ol>
			</div>
			<div class="col-md-6">
				<ol class="product-pagination text-right">
					<li><a href="{{ url('/blog-left-sidebar') }}"><i class="tf-ion-ios-arrow-left"></i> Next </a></li>
					<li><a href="{{ url('/blog-left-sidebar') }}">Preview <i class="tf-ion-ios-arrow-right"></i></a></li>
				</ol>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
								<img class="img-responsive"  src="{{asset('objet/'.$annonceDetails->objet->image)}}" alt="product-img" />
								</div>
								<!-- <div class='item'>
									<img src='images/shop/single-products/product-2.jpg' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-3.jpg' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-4.jpg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-5.jpg' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-6.jpg' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
								</div> -->

							</div>

							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>

						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src="{{asset('objet/'.$annonceDetails->objet->image)}}" alt='' />
							</li>
							<!-- <li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/single-products/product-2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/single-products/product-3.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/single-products/product-4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/shop/single-products/product-5.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='images/shop/single-products/product-6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='6'>
								<img src='images/shop/single-products/product-7.jpg' alt='' />
							</li> -->
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">

				<div class="single-product-details">
				<h2>{{$annonceDetails->objet->nom_objet}}</h2>
				    <h4>Prix de location par jour </h4>
					<p class="product-price">{{ $annonceDetails->prix_location }} DH par jours</p>
					<h4>Etat du produit </h4>
					<p class="product-price">{{$annonceDetails->objet->etat_objet  }}</p>
					<h4>Ville </h4>
					<p class="product-price">{{$annonceDetails->ville  }}</p>
					<h4>Nombre de jours minimum pour rendre le produit </h4>
					<p class="product-price">{{$annonceDetails->nbjour_min  }} jours</p>
					<h4>Ce produit ne sera disponible qu'à partir de   </h4>
					 <p class="product-price">{{$annonceDetails->date_debut  }}</p>
					 <h4>Voir plus de details sur ce produit   </h4>
					 <p class="product-price">{{$annonceDetails->objet->description  }}</p>

					 @if(Auth::check() && Auth::user()->id == $annonceDetails->id_partenaire)
					 @else
					@if($annonceDetails->type_annonce=='normal')
					<form action="{{ route('product-single', ['id_annonce' => $annonceDetails->id_annonce]) }}" method="post">
						@csrf
						<label for="DD">Date debut </label>
						<input type="date" id="date_debut" name="DD" value="{{ $annonceDetails->date_debut }}" min="{{ $annonceDetails->date_debut }}" max="{{ $annonceDetails->date_fin }}"> 
						<!-- khass t2a2joute datafin hanya max -->
						<label for="DF">Date fin </label>
						<input type="date" id="date_debut" name="DF" value="{{ $annonceDetails->date_debut }}" min="{{ $annonceDetails->date_debut }}" max="{{ $annonceDetails->date_fin }}">
						<input type="hidden" name="id_objet" value="{{ $annonceDetails->id_objet}}"><br>
						<input type="hidden" name="id_annonce" value="{{ $annonceDetails->id_annonce}}"><br>
						<input type="hidden" name="id_partenaire" value="{{ $annonceDetails->id_partenaire}}"><br>
	
	
					@endif

					@if($annonceDetails->type_annonce=='particulier')
					<?php
				   $date_debut = \Carbon\Carbon::parse($annonceDetails->date_debut);
$date_fin = \Carbon\Carbon::parse($annonceDetails->date_fin);

$jours_semaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

// Filter the list of days of the week to only include those marked as available in the advertisement
$jours_dispo = collect($jours_semaine)
    ->filter(function ($day) use ($annonceDetails) {
        return $annonceDetails->$day == 1;
    })
    ->values()
    ->toArray();

// Generate a list of available dates for each selected day of the week
$dates_par_jour = [];
function translate_day_of_week($day) {
    $translations = [
        'lundi' => 'Monday',
        'mardi' => 'Tuesday',
        'mercredi' => 'Wednesday',
        'jeudi' => 'Thursday',
        'vendredi' => 'Friday',
        'samedi' => 'Saturday',
        'dimanche' => 'Sunday'
    ];

    return $translations[$day] ?? null;
}
$jours_selectionnes = DB::table('annonce')
    ->select('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche')
    ->where('id_annonce', $annonceDetails->id_annonce)
    ->first();




$dates = [];

foreach ($jours_selectionnes as $jour => $selectionne) {
    if ($selectionne == 1) {
        $date = $date_debut->copy()->next(translate_day_of_week($jour));
        while ($date->lte($date_fin)) {
            $dates[] = $date->format('Y-m-d');
            $date = $date->copy()->next(translate_day_of_week($jour));
        }
    }
}

$dates = array_unique($dates);
sort($dates);


					?>
				<form action="{{ route('product-single', ['id_annonce' => $annonceDetails->id_annonce]) }}" method="post">
					@csrf
					
					<label for="DD">Date début :</label>
<select id="date_debut" name="DD">
    @foreach($dates as $date)
        <option value="{{ $date }}" {{ $date == $annonceDetails->date_debut ? 'selected' : '' }}>{{ $date }}</option>
    @endforeach
</select>

<label for="DF">Date fin :</label>
<select id="date_fin" name="DF">
    @foreach($dates as $date)
        <option value="{{ $date }}" {{ $date == $annonceDetails->date_fin ? 'selected' : '' }}>{{ $date }}</option>
    @endforeach
</select>

					
					<input type="hidden" name="id_objet" value="{{ $annonceDetails->id_objet}}"><br>
					<input type="hidden" name="id_annonce" value="{{ $annonceDetails->id_annonce}}"><br>
					<input type="hidden" name="id_partenaire" value="{{ $annonceDetails->id_partenaire}}"><br>	
				@endif
				
			 

			   @auth
			   <!-- Add this button before the </form> tag -->
				   <div id="reserve-btn-container">
				   <a name="submit" id="reserve-button" class="btn btn-main mt-20">Réserver</a>
				   </div>

			   <!-- <div id="modal" class="modal">
				   <div class="modal-content">        
				   <center><h3><strong>Contrat de location</strong></h3></center>
				   <p>Insérez ici les termes et conditions de location.</p>
				   <p>En cliquant sur le bouton ci-dessous, vous confirmez avoir lu et accepté les termes de ce contrat.</p>
						   <br/>
						   <div id="sig"></div>
						   <br/><br/>
						   <button id="clear" class="btn btn-danger btn-sm">Clear</button>
						   <textarea id="signature" name="signed" style="display: none"></textarea>
					   </div>
					   <br/>
					   <button id="confirm-button" class="btn btn-main mt-20">Confirmer la réservation</button>
				   </div> -->

				   <div id="modal" class="modal">
				   <div class="modal-content">        
				   <button type="button" class="btn btn-danger cancel-button" style="background-color: red; width: 100px;">Annuler</button>
				   <center><h3><strong>Contrat de location</strong></h3></center>
				   <p>Entre  <strong>{{ Auth::user()->name }}</strong>, ci-après dénommé le Client, et <strong>{{ $annonceDetails->Partenaire->nom}}</strong>, ci-après dénommé le Partenaire, il est convenu ce qui suit :</p>
				   <p>1.    Le Client s'engage à réserver l'objet décrit ci-dessous auprès du Partenaire pour la période de location spécifiée.</p>
				   <p>2.    Le Partenaire s'engage à mettre l'objet à la disposition du Client pour la période de location spécifiée, dans les conditions décrites ci-dessous.</p>
				   <p>3.    L'objet réservé est le suivant : <strong>{{ $annonceDetails->Objet->nom_objet }} </strong></p>
				   <p>4.    La période de location est du [date de début] au [date de fin], pour une durée totale de [nombre de jours] jours..</p>
				   <p>5.    Le Client est responsable de l'objet loué pendant la durée de la location, et s'engage à le maintenir en bon état et à le restituer dans les mêmes conditions qu'à la prise en charge.</p>
				   <p>6.    Le Client s'engage à respecter les conditions de location spécifiées par le Partenaire, y compris les instructions d'utilisation et de sécurité pour l'objet loué.</p>
				   <p>7.    Le Partenaire se réserve le droit de facturer des frais supplémentaires pour toute utilisation abusive ou pour toute détérioration de l'objet loué.</p>
				   <p>8.    Le présent contrat de réservation d'objet est conclu pour une durée déterminée et prend effet à compter de la signature du Client.</p>
						   <br/>
						   <div id="sig"></div>
						   <br/><br/>
						   <button id="clear" class="btn btn-danger btn-sm">Clear</button>
						   <textarea id="signature" name="signed" style="display: none"></textarea>
					   <br/>
					   <button id="confirm-button" class="btn btn-primary">Confirmer la réservation</button>
				   </div>
				   </div>
				<script>
					$('.cancel-button').click(function() {
				var modal = $(this).closest('.modal'); // get the modal containing the clicked cancel button
				modal.hide(); // hide the modal
				window.location.reload(); // reload the page
				});
				</script>  
   
			   <!-- Add this JavaScript to your script file -->
			   <script>			
			   // When the user clicks the button, open the modal 
			   document.getElementById("reserve-button").onclick = function() {
				   modal.style.display = "block";
			   }
			   </script>

			   <script type="text/javascript">
					   var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
					   $('#clear').click(function (e) {
						   e.preventDefault();
						   sig.signature('clear');
						   $("#signature64").val('');
					   });
				   </script>

			   @else
				   <a href="{{ route('login') }}" class="btn btn-main mt-20">Seconnecter pour reserver</a>
			   @endauth
		   </form>
		   @endif

		   @if (session('success'))
			   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
			   <script>
				   Swal.fire({
					   icon: 'success',
					   title: 'Réservation effectuée avec succès',
					   showConfirmButton: false,
					   timer: 1500
				   });
			   </script>
		   @endif

		
				

        </div>
			</div>
		</div>
		<div class="row">
    <div class="col-xs-12">
        <div class="tabCommon mt-20">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
                <li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews</a></li>
            </ul>
            <div class="tab-content patternbg">
                <div id="details" class="tab-pane fade active in">
                    <h4>Produit publié par</h4>
					<p> <button> <a href="{{ url('voir_profile' , ['idAnnonce' => $annonceDetails->id_annonce]) }}"> {{ $annonceDetails->partenaire->nom }} {{ $annonceDetails->partenaire->prenom }} </a></button></p>
                </div>
                <div id="reviews" class="tab-pane fade">
                    <div class="post-comments">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default active" data-target=".comment-positive">Commentaires positifs</button>
                            <button type="button" class="btn btn-default" data-target=".comment-negative">Commentaires négatifs</button>
                        </div>
                        <ul class="media-list comments-list m-bot-50 clearlist">
                            <!-- Comment Item start-->
                            <li class="media comment-positive">
                                @if (isset($reviews) && count($reviews->where('type_comment', 'Positif')) > 0)
                                    @foreach ($reviews->where('type_comment', 'Positif') as $rev)
									<a class="pull-left" >
											<div class="d-inline-block">
										<img class="img-fluid custom-class" src="{{asset('profile_pictures/'.$rev->client->user1->image)}}" alt="">
										</div>
									</a>
                                        <div class="media-body">
                                            <div class="comment-info">
												
                                                <h4 class="comment-author">
                                                    <a href="#!">{{ $rev->type_comment }}</a>
                                                </h4>
                                                <time datetime="2013-04-06T13:53">{{ $rev->etat_objet }}</time>
                                            </div>
                                            <p>{{ $rev->comment_objet }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <center><h4>No positive comments available</h4></center>
                                @endif
                            </li>
                            <li class="media comment-negative" style="display:none">
                                @if (isset($reviews) && count($reviews->where('type_comment', 'Negatif')) > 0)
                                    @foreach ($reviews->where('type_comment', 'Negatif') as $rev)
									<a class="pull-left" >
											<div class="d-inline-block">
										<img class="img-fluid custom-class" src="{{asset('profile_pictures/'.$rev->client->user1->image)}}" alt="">
										</div>
									</a>
                                        <div class="media-body">
                                            <div class="comment-info">
                                                <h4 class="comment-author">
                                                    <a href="#!">{{ $rev->type_comment }}</a>
                                                </h4>
                                                <time datetime="2013-04-06T13:53">{{ $rev->etat_objet }}</time>
                                            </div>
                                            <p>{{ $rev->comment_objet }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <center><h4>No negative comments available</h4></center>
                                @endif
                            </li>
                            <!-- Comment Item end-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	$(function() {
    $('.btn-group button').on('click', function() {
        $('.btn-group button').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('.media-list li').hide();
        $(target).show();
    });

    $('#btn-positif').on('click', function() {
        $('.media-list li').hide();
        $('.media-list li[data-type="Positif"]').show();
    });

    $('#btn-negatif').on('click', function() {
        $('.media-list li').hide();
        $('.media-list li[data-type="Negatif"]').show();
    });
});

</script>

</section>
<!-- <section class="products related-products section">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Related Products</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="../images/shop/products/product-5.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{ url('/product-single') }}">Reef Boardsport</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../images/shop/products/product-1.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{ url('/product-single') }}">Rainbow Shoes</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../images/shop/products/product-2.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{ url('/product-single') }}">Strayhorn SP</a></h4>
						<p class="price">$230</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="../images/shop/products/product-3.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{ url('/product-single') }}">Bradley Mid</a></h4>
						<p class="price">$200</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section> -->



<!-- Modal -->
<div class="modal product-modal fade" id="product-modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
  	<div class="modal-dialog " role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-8">
	        			<div class="modal-image">
		        			<img class="img-responsive" src="../images/shop/products/modal-product.jpg" />
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="product-short-details">
	        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
	        				<p class="product-price">$200</p>
	        				<p class="product-short-description">
	        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
	        				</p>
	        				<a href="#!" class="btn btn-main">Add To Cart</a>
	        				<a href="#!" class="btn btn-transparent">View Product Details</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
  	</div>
</div>
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
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
	<script>
    window.watsonAssistantChatOptions = {
      integrationID: "a46f9045-e5d5-4114-9773-34a4810b9bef", // The ID of this integration.
      region: "au-syd", // The region your integration is hosted in.
      serviceInstanceID: "b888c4e5-a8d0-4000-837c-4ee64ca16039", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
      document.head.appendChild(t);
    });
    </script>


  </body>
  
  	<!-- Add this HTML at the bottom of your page, just before the </body> tag -->


					
  </html> 
  @endsection

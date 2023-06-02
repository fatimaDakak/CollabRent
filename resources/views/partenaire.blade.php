@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        </div>
    </div>
</div>
<?php
use App\Models\Objet;
?>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
						<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					    </li><!-- / Search -->

						</li><!-- / Cart -->
						<ul class="text-center cart-buttons">
									<li><a href="{{ url('/partenaire') }}"class="btn btn-small">Mode Partenaire</a></li>
									<li><a href="{{ url('/dashboard_client') }}" class="btn btn-small btn-solid-border">Mode Client</a></li>
						</ul>
						<!-- Search -->




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
      <li><a class="active" href="{{ url('/partenaire') }}">Dashboard</a></li>
      <li><a href="{{ url('/order') }}">Réservations reçus</a></li>
      <li><a href="{{ url('/partenaire/addadfirst') }}">Ajouter Annonce</a></li>
	  <li><a href="{{ url('/partenaire/addobjet') }}">Ajouter Objet</a></li>
      <li><a  href="{{ url('/profile-details') }}">Profile Details</a></li>
	 
	  <li><a  href="{{ url('/reviews_partenaire') }}">Reviews</a></li>
	  <li><a  href="{{ url('/eval_partenaire') }}">Feedbacks</a></li>
    </ul>
</div>

<section class="products section">
    <div class="container">
        <div class="row">


@foreach ($annonces as $annonce)
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive"  src="{{asset('objet/'.$annonce->objet->image)}}" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                            <li>
    <span onclick="deleteAnnouncement({{ $annonce->id_annonce }})">
        <i class="fa-solid fa-trash"></i>
    </span>
</li>
                                <li>
                                    <a href="{{ route('product-single', ['id_annonce' => $annonce->id_annonce]) }}" ><i class="fa-solid fa-eye"></i></a>
                                </li>
                                <li>
                                <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="fa-solid fa-box-archive"></i>
                                </li>
                            </ul>
                          </div>
                    </div>
                    <div class="product-content">
                    
                        <h3><a ><strong>{{$annonce->objet->nom_objet}}</strong></a></h3>
                        <h4><a >{{$annonce->prix_location}} DH/jour</a></h4>
					<button style="background-color: black; border-radius: 0; color:white;" class="btn-toggle" data-id="{{ $annonce->id_annonce }}" data-status="{{ $annonce->statut_of_on ? 'online' : 'offline' }}">
						{{ $annonce->statut_of_on ? 'Online' : 'Offline' }}
					</button>
                    </div>
                </div>
            </div>
@endforeach

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.btn-toggle', function() {
        var button = $(this);
        var annonceId = button.data('id');
        var status = button.data('status');
        $.ajax({
            url: '/partenaire/' + annonceId,
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { statut: status },
            dataType: 'json',
            success: function(data) {
                console.log(data);
                button.data('status', data.status ? 'online' : 'offline');
                button.text(data.status ? 'Online' : 'Offline');
                button.toggleClass('badge-success badge-danger');
            },
            error: function(xhr, textStatus, errorThrown) {
                swal({
                    title: "Error",
                    text: xhr.responseJSON.error,
                    icon: "error",
                });
            }
        });
    });
</script>
@if(isset($annonce))

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
                                    <img class="img-responsive" src="{{asset('objet/'.$annonce->objet->image)}}" />

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                            <form method="POST" action="{{ route('annonces.update', ['id_annonce' => $annonce->id_annonce]) }}"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="form-group">
                <label >Changer l'objet de l'annonce</label>

<?php  $objects = Objet::where('id_categorie', $annonce->objet->id_categorie)->where('id_partenaire',$annonce->partenaire->id_partenaire)->get();
?>
            <select name="id_objet" class="form-control">
                <option value="{{ $annonce->objet->id_objet }}">{{ $annonce->objet->nom_objet }}</option>
                @foreach ($objects as $object)
                    @if ($object->id_objet !== $annonce->objet->id_objet)
                        <option value="{{ $object->id_objet }}">{{ $object->nom_objet }}</option>
                    @endif
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix_location" value="{{ $annonce->prix_location }}">
            </div>
            <label for="ville">Ville</label>
        <select id="ville" name="ville" class="form-control">
            <option value="agadir" {{ $annonce->ville == 'agadir' ? 'selected' : '' }}>Agadir</option>
            <option value="achka" {{ $annonce->ville == 'achka' ? 'selected' : '' }}>Achka</option>
            <option value="khenifra" {{ $annonce->ville == 'khenifra' ? 'selected' : '' }}>Khenifra</option>
            <option value="tiznit" {{ $annonce->ville == 'tiznit' ? 'selected' : '' }}>Tiznit</option>
            <option value="meknes" {{ $annonce->ville == 'meknes' ? 'selected' : '' }}>Meknes</option>
        </select>
        <label for="state">L'etat de l'objet </label>
            <select id="state" name="etat_objet" class="form-control">
                <option  name="etat_objet" value="neuf" {{ $annonce->etat_objet == "neuf" ? "selected" : "" }}>Neuf</option>
                <option  name="etat_objet" value="modeste" {{ $annonce->etat_objet == "modeste" ? "selected" : "" }}>Modeste</option>
                <option  name="etat_objet" value="excellent" {{ $annonce->etat_objet == "excellent" ? "selected" : "" }}>Excellent</option>
                <option  name="etat_objet" value="comfortable" {{ $annonce->etat_objet == "comfortable" ? "selected" : "" }}>Comfortable</option>
            </select>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div><!-- /.modal -->
        </div>
    </div>
    @else
    <center><h2>No announcement available</h2></center>
    @endif


</section>
@if (session('swal'))
    <script>
        swal({
            title: "{{ session('swal.title') }}",
            text: "{{ session('swal.text') }}",
            icon: "{{ session('swal.icon') }}",
        });
    </script>
@endif




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
<!-- traitement popup suppression -->
<script>
    function deleteAnnouncement(id) {
    event.preventDefault();
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this announcement!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: '/annonces/' + id + '/delete',
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    swal(response.message, {
                        icon: "success",
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function (xhr) {
                    swal(xhr.responseJSON.message, {
                        icon: "error",
                    });
                }
            });
        }
    });
}

</script>

</html>

@endsection

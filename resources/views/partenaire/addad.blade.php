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
  <link rel="stylesheet" href="/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <link rel="stylesheet" href="/plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/css/style.css">
<!--fonteawesome-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    button:disabled {
    background-color: gray;
    color: white;
  }
  button.enabled {
    background-color: rgb(0, 0, 0);
    color: white;
  }
  button[type="submit"]:hover {
  background-color: gray;
  color:white;
}
.alert {
  display: flex;
  align-items: center;
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
}

.danger {
  background-color: #FFE5CA;
  color: red;
}

.danger i {
  font-size: 20px;
  margin-right: 10px;
  color: #E74646;
}

.danger strong {
  color: #E74646;
  margin: 0 auto;
  text-align: center;
  display: flex;
  margin-left: 0px;
  /* align-items: center;
  justify-content: center; */
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
      <li><a  href="{{ url('/partenaire') }}">Dashboard</a></li>
      <li><a href="{{ url('/order') }}">Réservations reçus</a></li>
      <li><a  class="active" href="{{ url('/partenaire/addadfirst') }}">Ajouter Annonce</a></li>
	  <li><a href="{{ url('/addobjet') }}">Ajouter Objet</a></li>
      <li><a  href="{{ url('/profile-details') }}">Profile Details</a></li>
	  <li><a  href="{{ url('/reviews_partenaire') }}">Reviews</a></li>
	  <li><a  href="{{ url('/eval_partenaire') }}">Feedbacks</a></li>
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
  <center>  <form id="form1" method="POST" action="{{ route('partenaire.addad') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          
        <div id="object-select-field">
        <a href="{{ url('/partenaire/addadfirst') }}" class="btn btn-small" style="float: left;">
                  <i class="tf-ion-ios-arrow-back"></i> Retour
                </a><br><br><br><br>
                @if (isset($sel) && $sel->isNotEmpty())
                    <input type="hidden" name="id_categorie" value="{{ $sel->first()->id_categorie }}">
                @else
                <div class="alert danger">
                  <i class="fas fa-exclamation-circle"></i>
                  <strong>No object added to this category yet.</strong>
                </div>
                @endif
                

                <label for="title">Choisir un Objet</label>
                <select id="object_select" name="id_objet">
                    @foreach ($sel as  $item)
                        <option value="{{ $item->id_objet }}">{{ $item->nom_objet }}</option>
                    @endforeach
                </select>
            </div>
           
            <label for="date">Cette Annonce sera disponible à partir de </label>
<input type="date" id="date_debut" name="date_debut" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
<label for="date">Cette jusqu'à </label>
<input type="date" id="date_fin" name="date_fin" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

            <label for="date"> Nombre de jour minimum pour la location de cet objet</label>
            <input type="number" id="nbjour_min" name="nbjour_min">
            <label for="price">Prix de location </label> 
            <input type="number" id="price" name="prix_location">
            <label for="location">Ville </label>
            <select id="ville" name="ville">
                <option  name="ville" value="agadir">Agadir</option>
                <option  name="ville" value="achka">Achka</option>
                <option  name="ville" value="khenifra">Khenifra</option>
                <option  name="ville" value="tiznit">Tiznit</option>
                <option  name="ville" value="meknes">Meknes</option>
            </select>
             <label for="location">Type:</label>
<select id="type" name="type_annonce" onchange="showDays()">
  <option value="normal">Normal</option>
  <option value="particulier">Particulier</option>
</select>

<div id="days" style="display:none;">
  <label>Jours de disponibilité :</label><br>
  <input type="checkbox" id="lundi" name="jours_dispo[]" value="lundi" style="display: inline-block;>
  <label for="lundi">Lundi</label><br>
  <input type="checkbox" id="mardi" name="jours_dispo[]" value="mardi" style="display: inline-block;>
  <label for="mardi">Mardi</label><br>
  <input type="checkbox" id="mercredi" name="jours_dispo[]" value="mercredi" style="display: inline-block;>
  <label for="mercredi">Mercredi</label><br>
  <input type="checkbox" id="jeudi" name="jours_dispo[]" value="jeudi" style="display: inline-block;>
  <label for="jeudi">Jeudi</label><br>
  <input type="checkbox" id="vendredi" name="jours_dispo[]" value="vendredi" style="display: inline-block;>
  <label for="vendredi">Vendredi</label><br>
  <input type="checkbox" id="samedi" name="jours_dispo[]" value="samedi" style="display: inline-block;>
  <label for="samedi">Samedi</label><br>
  <input type="checkbox" id="dimanche" name="jours_dispo[]" value="dimanche" style="display: inline-block;>
  <label for="dimanche">Dimanche</label><br>
</div>

<script>
function showDays() {
  var selectBox = document.getElementById("type");
  var daysDiv = document.getElementById("days");
  if (selectBox.value == "particulier") {
    daysDiv.style.display = "block";
  } else {
    daysDiv.style.display = "none";
  }
}
</script>


            <div class="wrapper">
                <br>
                <div class="form-col">
                    <button type="submit" name="submit" id="envoyer" disabled>Ajouter Annonce</button>
                </div>
            </div>
        </div>
    </form></center>
</div>

<script>

const form = document.getElementById('form1');
const inputs = form.querySelectorAll('input, select, textarea');
const submitBtn = form.querySelector('button[type="submit"]');

const isFormValid = () => [...inputs].every(input => input.value !== '');

submitBtn.disabled = true;

inputs.forEach(input => {
  input.addEventListener('input', () => {
    submitBtn.disabled = !isFormValid();
    if (submitBtn.disabled) {
      submitBtn.classList.remove('enabled');
    } else {
      submitBtn.classList.add('enabled');
    }
  });
});
</script>




<script>
    function getObjects() {
        const categoryId = document.getElementById('category_select').value;
        const url = `/api/objects?category=${categoryId}`;
    
        fetch(url)
            .then(response => response.json())
            .then(objects => {
                const objectSelect = document.getElementById('object_select');
                objectSelect.innerHTML = '';
    
                objects.forEach(object => {
                    const option = document.createElement('option');
                    option.value = object.id_objet;
                    option.textContent = object.nom_objet;
                    objectSelect.appendChild(option);
                });
            });
    }
    </script>

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
    </body>
</html> 
@endsection

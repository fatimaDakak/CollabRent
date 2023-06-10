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
  <title>CLR </title>

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
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <!-- Animate css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/filter.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js"></script>

  
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

<div class="container3">
  <div class="row">
    <div class="col-md-3">

<div class="panel-filters">
  <h3><i class="fa fa-filter"></i>Filters</h3>
  <form id="filter-form" onsubmit="filterAnnonce(); return false;">
    <div class="form-group">
      <label for="category"><i class="fa fa-folder"></i><span style="padding-left: 7px;">Category:</span></label>
	  <select id="category" name="category">
	  <option value="1" {{ $cat == 1 ? 'selected' : '' }} href="{{ route('objets', 1) }}">Automobile</option>
	  <option value="2" {{ $cat == 2 ? 'selected' : '' }} href="{{ route('objets', 2) }}">Property</option>
	  <option value="3" {{ $cat == 3 ? 'selected' : '' }} href="{{ route('objets', 3) }}">Electronics</option>
    </select>
	<input type="hidden" name="category" value="{{ $cat }}">

    </div>

	<div class="form-group">
	<label id="city-label"><i class="fa fa-map-marker"></i><span style="padding-left: 7px;">City:</span><span style="padding-left: 145px;"><i class="fa fa-caret-up"></i></span></label>
	<div class="checkbox-group-vertical" id="city-div">
    <label><input type="checkbox" name="city[]" value="Agadir"  class="filter-checkbox"><span class="checkbox"></span> Agadir</label>
    <label><input type="checkbox" name="city[]" value="Casablanca"  class="filter-checkbox"><span class="checkbox"></span> Casablanca</label>
	<label><input type="checkbox" name="city[]" value="Tiznit"  class="filter-checkbox"><span class="checkbox"></span> Rabat</label>	
    <label><input type="checkbox" name="city[]" value="Tiznit"  class="filter-checkbox"><span class="checkbox"></span> Marrakech</label>	
    <label><input type="checkbox" name="city[]" value="Tiznit"  class="filter-checkbox"><span class="checkbox"></span> Tanger</label>	
    <label><input type="checkbox" name="city[]" value="Tiznit"  class="filter-checkbox"><span class="checkbox"></span> Tétouan</label>	
  </div> 
</div>

    <div class="form-group">
	<label id="min-rental-label"><i class="fa fa-clock-o"></i><span style="padding-left: 7px;">Minimum Rental:</span><span style="padding-left: 40px;"><i class="fa fa-caret-up"></i></span></label>
	<div class="checkbox-group-vertical" id="min-rental-div">
        <label><input type="checkbox" name="min-rental[]" value="1"  class="filter-checkbox"><span class="checkbox"></span>1 day</label>
        <label><input type="checkbox" name="min-rental[]" value="3"  class="filter-checkbox"><span class="checkbox"></span>3 days</label>
        <label><input type="checkbox" name="min-rental[]" value="7"  class="filter-checkbox"><span class="checkbox"></span>7 days</label>
        <label><input type="checkbox" name="min-rental[]" value="+7" class="filter-checkbox" id="min-rental-7plus"><span class="checkbox"></span>+7 days</label>
      </div>
    </div>
	<div class="form-group">
	<label id="min-rental-label"><i class="fa fa-comment"></i><span style="padding-left: 7px;">Commentaires</span><span style="padding-left: 40px;"><i class="fa fa-caret-up"></i></span></label>
	<div class="checkbox-group-vertical" id="comment-div">
        <label><input type="checkbox" name="comment[]" value="Positif"  class="filter-checkbox"><span class="checkbox"></span>Positif</label>
        <label><input type="checkbox" name="comment[]" value="Negatif"  class="filter-checkbox"><span class="checkbox"></span>Négatif</label>
      </div>
    </div>


<div class="form-group">
<label id="min-rental-label"><i class="fa fa-clock-o"></i><span style="padding-left: 7px;">Date de disponibilité</span><span style="padding-left: 40px;"><i class="fa fa-caret-up"></i></span></label>
  <input type="date" name="date_dispo">
</div>
<div class="form-group">
<label id="min-rental-label"><i class="fa fa-money"></i><span style="padding-left: 7px;">Prix de location</span><span style="padding-left: 40px;"><i class="fa fa-caret-up"></i></span></label>
  <input type="number" name="prix_location"> 
</div>


	<div class="form-group">
            <button type="submit">Filter</button>
          </div>
  </form>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#category').change(function() {
            var cat = $(this).val();
            var url = "{{ route('objets', ':cat') }}";
            url = url.replace(':cat', cat);
            window.location.href = url;
        });
    });
</script>

<!-- pour filtrage  -->
<script>
function filterAnnonce() {
  const category = '{{ $cat }}';
  const cityCheckbox = document.querySelectorAll('#city-div input[type="checkbox"]:checked');
  const cityValues = Array.from(cityCheckbox).map((checkbox) => checkbox.value);
  const minRentalCheckbox = document.querySelectorAll('#min-rental-div input[type="checkbox"]:checked');
  const minRentalValues = Array.from(minRentalCheckbox).map((checkbox) => checkbox.value);
  const dateDispoInput = document.querySelector('input[name="date_dispo"]');
const prixLocationInput = document.querySelector('input[name="prix_location"]');
const commentCheckbox = document.querySelectorAll('#comment-div input[type="checkbox"]:checked');
  const commentValues = Array.from(commentCheckbox).map((checkbox) => checkbox.value);
const dateDispoValue = dateDispoInput.value;
const prixLocationValue = prixLocationInput.value;


  const url = "{{ route('objets', $cat) }}";
  const params = new URLSearchParams();
  if (cityValues.length > 0) {
    params.append('city', cityValues.join(','));
  }
  if (minRentalValues.length > 0) {
    params.append('min_rental', minRentalValues.join(','));
  }
  if (dateDispoValue !== "") {
  params.append('date_dispo', dateDispoValue);
}
if (prixLocationValue !== "") {
  params.append('prix_location', prixLocationValue);
}
if (commentValues.length > 0) {
    params.append('comment', commentValues.join(','));
  }
  const finalUrl = `${url}?${params.toString()}`;
  console.log(finalUrl);
  window.location.href = finalUrl;
}
</script>



<script>
  const caretIcons = document.querySelectorAll('.fa-caret-up, .fa-caret-down');
  caretIcons.forEach((icon) => {
    icon.addEventListener('click', () => {
      const parentLabel = icon.parentNode.parentNode;
      const formGroup = parentLabel.nextElementSibling;
      if (formGroup.style.display === 'none') {
        formGroup.style.display = 'block';
        icon.classList.remove('fa-caret-down');
        icon.classList.add('fa-caret-up');
      } else {
        formGroup.style.display = 'none';
        icon.classList.remove('fa-caret-up');
        icon.classList.add('fa-caret-down');
      }
    });
  });
</script>

<script>
    @if(Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Reservation successful!',
            text: 'Your reservation has been made successfully.',
        })
    @endif
</script>



<div class="col-md-9">
<section class="products section">
	<div class="container2">
		<div class="row"  id="annonces-list">
		@if ($annonce->isEmpty())
		<div class="col-md-10">
		<div class="alert alert-info" role="alert">
			<i class="far fa-frown"></i> Aucune annonce trouvée.
		</div>
		</div>

	    @else
		@foreach ($annonce as $prod)
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<!-- <span class="bage">Ajouter au panier</span> -->
						<img class="img-responsive" src="{{asset('objet/'.$prod->objet->image)}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<!-- <li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li> -->
								<li>
									<a href="{{ route('product-single', ['id_annonce' => $prod->id_annonce]) }}"><i class="tf-ion-ios-eye"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
							<h4><a href="{{ route('product-single', ['id_annonce' => $prod->id_annonce]) }}">{{ $prod->objet->nom_objet}}</a></h4> 
							 <h6><a href="{{ route('product-single', ['id_annonce' => $prod->id_annonce]) }}">{{ $prod->ville}}</a></h6> 
							 <p class="price">{{ $prod->prix_location }} DH/jour</p> 	
					</div>
				</div>
			</div>
		@endforeach
		@endif
		</div><!-- /.modal -->
		</div>
</section>
</div>
</div>
</div>

 



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
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="{{ url('/contact') }}">CONTACT</a>
					</li>
					<li>
						<a href="{{ url('/shop') }}">SHOP</a>
					</li>
					<li>
						<a href="{{ url('/pricing') }}">Pricing</a>
					</li>
					<li>
						<a href="{{ url('/contact') }}">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
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
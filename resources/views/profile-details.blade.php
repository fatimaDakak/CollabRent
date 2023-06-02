@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        </div>
    </div>
</div>


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
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  {{-- <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

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


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Profile Details</h1>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

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

			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>
<section class="user-dashboard page-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="list-inline dashboard-menu  mb-5">
            <li class="list-inline-item"><a href="{{ url('/partenaire') }}" class="text-decoration-none text-dark">Dashboard</a></li>
            <li class="list-inline-item"><a href="{{ url('/order') }}" class="text-decoration-none text-dark">Réservations reçus</a></li>
            <li class="list-inline-item"><a href="{{ url('/partenaire/addadfirst') }}" class="text-decoration-none text-dark">Ajouter Annonce</a></li>
            <li class="list-inline-item"><a href="{{ url('/addobjet') }}" class="text-decoration-none text-dark">Ajouter Objet</a></li>
            <li class="list-inline-item"><a href="{{ url('/profile-details') }}" class="text-decoration-none active">Profile Details</a></li>
            <li class="list-inline-item"><a href="{{ url('/reclamations_partenaire') }}" class="text-decoration-none text-dark">Réclamations</a></li>
            <li class="list-inline-item"><a href="{{ url('/reviews_partenaire') }}" class="text-decoration-none text-dark">Reviews</a></li>
          </ul>
        </div>
          <div class="dashboard-wrapper dashboard-user-profile">
            <div class="media">
              <div class="pull-start text-center">
                <img class="user-img"  id="picture_profile" src="{{ asset('profile_pictures/'.Auth::user()->image) }}" alt="Image">
                {{-- <a href="#x" class="btn btn-outline-secondary mt-2">Change Image</a> --}}
              </div>
              <div class="media-body ps-5">
                <ul class="list-unstyled user-profile-list">
                  <li id="name"><span>Nom:</span><h4 id="nom">{{ Auth::user()->partenaire->nom }} </h4></li>
                  <li id="name"><span>Prénom:</span><h4 id="prenom">{{ Auth::user()->partenaire->prenom }} </h4></li>

                  <li ><span>Email:</span><h4 id="email">{{ Auth::user()->email }}</h4></li>
                  <li ><span>CIN:</span><h4 id="cin">{{ Auth::user()->partenaire->CIN }}</h4></li>
                </ul>
              </div>
              <button class="btn btn-dark ms-auto" type="button" data-bs-toggle="modal" data-bs-target="#profile">Edit profil</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Edit profile form -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="edit-profile-form">Edit profile</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			<form id="Myform" enctype="multipart/form-data">
                @csrf
@method('POST')
                <div class="mb-3">
                  <label for="name" class="form-label">FirtName:</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{ Auth::user()->partenaire->nom }} ">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">FirtName:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ Auth::user()->partenaire->prenom }} ">
                  </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="mb-3">
                  <label for="cin" class="form-label">CIN:</label>
                  <input type="text" class="form-control" id="cin" name="cin" value="{{ Auth::user()->partenaire->CIN }}">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Profile Picture:</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>


</div>
</div>
</div>
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
<script>
    document.getElementById('Myform').addEventListener('submit', function (event) {
        event.preventDefault();
        let formData = new FormData(event.target);
        let url = "{{ route('profile-details') }}";
        fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Profile updated successfully!');
                // Update the profile details in the DOM
                document.getElementById('nom').textContent = formData.get('nom');
                document.getElementById('prenom').textContent = formData.get('prenom');
                document.getElementById('cin').textContent = formData.get('cin');
                document.getElementById('email').textContent = formData.get('email');

                // Update the profile picture in the DOM
                let imageFile = document.getElementById('picture').files[0];
                if (imageFile) {
                let imageURL = URL.createObjectURL(imageFile);
                document.getElementById('picture_profile').setAttribute('src', imageURL);
            }

            } else {
                alert('Failed to update profile.');
            }
        })
        .catch(error => alert(error));
    });
</script>
  </body>
  </html>

@endsection
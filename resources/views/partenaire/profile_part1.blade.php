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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .box {
  background-color: #E7F6F2; /* set background color */
  border: 2px solid #A5C9CA; /*add border */
  border-radius: 0px; /* add rounded corners */
  padding: 8px; /* add some padding */
  margin-bottom: 20px; /* add some margin to separate from other content */
}

.box h4 {
  margin: 0; /* remove default margin */
  text-align: center; /* center the text */
  color: #395B64; /* set text color */
}

</style>
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
				<a href="{{ url('/') }}">
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

			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>
<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>A propos de User</h2>
        {{-- <ul class="list-inline dashboard-menu text-center">
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          <li><a href="{{ url('/order') }}">Objets Demandés</a></li>
          <li><a href="{{ url('/address') }}">Address</a></li>
          <li><a class="active"  href="{{ url('/profile-details') }}">Profile Details</a></li>
        </ul> --}}
        <div class="dashboard-wrapper dashboard-user-profile">
          <div class="media">
            <div class="pull-left text-center" href="#!">
              <img class="media-object user-img" src="{{ asset('profile_pictures/'.$publisher->user->image) }}" alt="Image">
            </div>


            <div class="media-body">
              <ul class="user-profile-list">

                <li><span>User:</span>{{ $publisher->nom }} {{ $publisher->prenom }}</li>
                {{-- <li><span>Email:</span>{{ $publisher->email }}</li> --}}
                <li><span><strong> Reviews:</strong> </span></li>
                @if($evalua->count() > 0)
        @foreach($evalua as $eval)
            <div class="review">
                <h4>Feedback {{$eval->id_eval_partenaire}}</h4>
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
                {{ $eval->comment_part }}</div>
                <div class="client-info">
                    <p>Client: {{ $eval->client->nom }} {{ $eval->client->prenom }}  {{ $eval->comment_part }}</p>
                    <!-- Add more client information as needed -->
                </div>
            </div>
        @endforeach
    @else
        <h4>No reviews at the moment</h4>
    @endif
</div>

              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="products section">
        <div class="container">
        <div class="box">
            <center>
                <h4>Explorer les autres annonces publiées par <strong>{{ $publisher->nom }} {{ $publisher->prenom }}</strong></h4>
            </center>
            </div>
            @foreach($annonces as $ann)
            <div class="row">

                <div class="col-md-4">
                    <div class="product-item">
                        <div class="product-thumb">
                            <!-- <span class="bage"></span> -->
                            <img class="img-responsive" src="{{asset('objet/'.$ann->objet->image)}}" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <!-- <span  data-toggle="modal" data-target="#product-modal">
                                             <i class="tf-ion-ios-search-strong"></i> -->
                                        </span> 
                                    </li>
                                    <li>
									<a href="{{ route('product-single', ['id_annonce' => $ann->id_annonce]) }}"><i class="tf-ion-ios-eye"></i></a>
                                    </li>
                                    <li>
                                        <!-- <a href="#!"><i class="tf-ion-android-cart"></i></a> -->
                                    </li>
                                </ul>
                              </div>
                        </div>

                            <div class="product-content">
                                <h4><a href="{{ route('product-single', ['id_annonce' => $ann->id_annonce]) }}">{{$ann->objet->nom_objet}}</a></h4>
                                <p class="price">{{ $ann->prix_location }} DH par jour</p>
                            </div>
                    </div>

                </div>
                @endforeach


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
                                        <h2 class="product-title">GM Pendant, Basalt Grey</h2>
                                        <p class="product-price">$200</p>
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
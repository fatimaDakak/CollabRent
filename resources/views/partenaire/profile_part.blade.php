<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="part.css">
    <title>Profile Partenaire</title>
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="fontawesome/css/brands.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand p-3" href="#">COLLABRENT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Demandes</a>
          </li>


        </ul>
      </div>
    </nav>

    <!-- Profile recap -->
    <div class="container-fluid bg-light mt-5">
      <div class="row">
        <div class="col-12 ">
          <div class="row">
            <!-- Profile image -->
            <div class="col-2">
              <img src="images/profile.jpg" class="rounded-circle m-3 img-thumbnail" width="150px">
            </div>
            <!-- Profile information -->
            <div class="col-6">
              <div class="row mt-5">
                {{$partenaire['nom_partenaire']}} </div>
              <div class="row">
                {{$partenaire['telephone']}}
              </div>
              <div class="row">
                {{$partenaire['email']}}
              </div>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>

            </div>
            <!-- Edit profile and add announcement buttons -->
            <div class="col-4">
                <div class="row mt-3">
                <button class="btn btn-outline-primary">Modifier le profil</button>
                </div>
                <div class="row mt-3">
               <a href="/addad" ><button class="btn btn-outline-primary">Ajouter une annonce</a></button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--les annonces-->

<div class="container mt-5 position-relative card-container" >
    <div class="row row-cols-sm-4 ">
      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias consequatur ut</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">3543 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum ea sint .</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">3543 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum ea sin.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1000 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 4</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum ea sin</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1000 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 5</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum ea sin</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1000 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/voiture.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Annonce 6</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur harum ea sin</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1000 DH</li>
          <li class="list-group-item">Tétouan</li>
        </ul>
      </div>
    </div>
</div>

      <div class=" row  m-4 ">
        <button class="btn btn-primary btn-sm w-25  rounded-pill position-absolute top-20 start-50 translate-middle" id="show-next-btn">Show Next</button>
      </div>
  </body>
  </html>

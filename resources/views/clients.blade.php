@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- <div class="card">
                <div class="card-header">{{ __('Admin _ Dashboard') }}</div>

                 <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
{{ session('status') }}
                    </div>
@endif

                {{ __('You are logged as a Admin!') }}
                </div> -->
            </div>
        </div>
    </div>
    </div>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
        <link rel="stylesheet" href="css/dashboard.css">

        <title>CollabRent | Admin</title>
    </head>
    <body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
        <i class='bx bxs-user-circle'></i>
         <span class="text"><strong>CollabRent</span>
        </a>
        <ul class="side-menu top">
            <li >
                <a href="/admin">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li >
                <a href="/partners">
                <i class='bx bxs-group'></i>
                    <span class="text">Partenaires</span>
                </a>
            </li>
            <li class="active">
                <a href="/clients" active>
                <i class='bx bxs-user'></i>
                    <span class="text">Clients</span>
                </a>
            </li>
            <li >
                <a href="/addcategorie">
                <i class='bx bxs-folder'></i>
                    <span class="text">Catégories</span>
                </a>
            </li>
            
        </ul>
        <ul class="side-menu">
           
            <!-- <li>
                <a href="#" class="logout">
                     <a  href="{{ route('logout') }}"
                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                                 
                </a>
            </li> -->
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <!-- <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
           
            <a href="#" class="profile">
            <img src="images/team/5.png">
            </a>
        </nav> -->
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="/clients">Clients</a>
                        </li>
                    </ul>
                </div>
               
            </div>
<!-- 
            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
						<h3></h3>
						<p>Annonces</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle' ></i>
                    <span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
                </li>
            </ul> -->


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Clients</h3>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>Client id</th>
                            <th>Client name </th>
                            <th>Accepted requests</th>
                            <th>Rejected requests</th>
                        </tr>
                        </thead>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->id_client}}</td>
                            <td>{{$client->nom}}</td>
                            <td>{{$client->reservations_accepted}}</td>
                            <td>{{$client->reservations_rejected}}</td>
                        </tr>
                    @endforeach
                </table>
                </div>

        
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
    </body>
    </html>

    <script src="js/script3.js"></script>
    </body>
    </html>

@endsection
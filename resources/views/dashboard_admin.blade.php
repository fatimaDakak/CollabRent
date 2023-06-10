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

        <title>CollabRent | Amdin</title>
    </head>
    <body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
        <i class='bx bxs-user-circle'></i>
         <span class="text"><strong>CollabRent</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
            <li >
                <a href="/clients" active>
                <i class='bx bxs-user'></i>
                    <span class="text">Clients</span>
                </a>
            </li>
            <li >
                <a href="/addcategorie">
                <i class='bx bxs-folder'></i>
                    <span class="text">Ajouter Catégorie</span>
                </a>
            </li>
            
        </ul>
        <ul class="side-menu">
           
            <!-- <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
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
                            <a class="active" href="/admin">Home</a>
                        </li>
                    </ul>
                </div>
               
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
                       <h3> {{$count=DB::table('users')->where('role','=',2)->count()}}</h3>
						<p>Nombre d'utilisateurs</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
						<h3>{{$reserva = DB::table('reserver')->where('status','=','accepted')->count()}}</h3>
						<p>Nombre de réservations</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle' ></i>
                    <span class="text">
                        @php
                            $mostRentedObjet = DB::table('reserver')
                     ->select('id_objet')
                     ->groupBy('id_objet')
                     ->orderByDesc(DB::raw('COUNT(id_annonce)'))
                     ->value('id_objet');


                            $mostRentedObjetNom = DB::table('objet')
                      ->select('nom_objet')
                      ->where('id_objet', $mostRentedObjet)
                      ->value('nom_objet');

                        @endphp
						<h3>{{$mostRentedObjetNom}}</h3>
						<p>Most located objet</p>
					</span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Reclamations</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>Reclamation DE</th>
                            <th>Reclamation SUR</th>
                            <th>Description</th>
                            <th>Avertir</th>
                        </tr>
                        </thead>
                        @foreach ($reclamations as $reclamation)
                            <tr>
                                <td>{{ $reclamation->reclamation_de }}</td>
                                <td>{{ $reclamation->reclamation_sur }}</td>
                                <td>{{ $reclamation->description }}</td>
                                <td>
                                    <form action="{{ route('reclamations.destroy', $reclamation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Avertir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class='bx bx-plus' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                    </ul>
                </div> -->
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
<!-- app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>

@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image ">
                    <!-- -----Image------
                      <img src="images/whitz.png" alt="">  -->
                </div>
                <div class="col-md-6 right">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div class="input-box">
        <header>{{ __('Register') }}</header>
        <div class="input-box">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="input-field">
                <input type="text" class="input" id="name" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" >
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
                <input type="text" class="input" id="prenom" class="form-control @error('prenom') is-invalid @enderror" name ="prenom" required autocomplete="prenom">
                <label for="prenom">{{ __('Prénom') }}</label>
                @error('prenom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
                <input type="email" class="input" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autocomplete="email">
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
                <input type="text" class="input" id="CIN" name ="CIN" required>
                <label for="CIN">{{ __('CIN') }}</label>
                @error('cin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
                <input type="password" class="input" id="password" class="form-control @error('password') is-invalid @enderror" name="mot_de_passe" required autocomplete="new-password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
                <input id="password-confirm" class="input" type="password"  name="mot_de_passe_confirmation" required autocomplete="new-password">
                <label for="mot_de_passe_confirmation">{{ __('Confirm Password') }}</label>
            </div>
            <div class="input-field">
                <h6>Add your photo here</h6>
                <input type="file" name="image" id="image" accept="image/*" required>
                @error('image')
                <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@endif
</div>
<div class="input-field ">
    <button id="registerBtn" type="submit" class="submit">{{ __('Register') }}</button>
</div>
</div>
</form>


                </div>
            </div>
        </div>
    </div>
    <script>
    function showTermsPopup() {
        Swal.fire({
            title: 'Conditions d\'utilisation',
            html: `
            <div style="text-align: justify;">
                <p>En utilisant notre site web <strong>CollabRent</strong> pour louer des objets, vous acceptez les conditions suivantes:</p>
                <ol>
                    <li>Vous êtes responsable de tout objet loué sur notre site web, y compris les dommages causés pendant l'utilisation de l'objet.</li>
                    <li>Vous devez retourner l'objet loué dans le même état que lorsque vous l'avez reçu.</li>
                    <li>Vous ne pouvez pas louer d'objets pour des activités illégales ou dangereuses.</li>
                    <li>Vous ne pouvez pas louer d'objets à des tiers ou les sous-louer sans notre autorisation écrite préalable.</li>
                    <li>Vous êtes responsable de l'utilisation appropriée de tout objet loué, y compris le respect de toutes les lois et réglementations applicables.</li>
                    <li>Nous nous réservons le droit de refuser ou d'annuler toute location pour quelque raison que ce soit, y compris les préoccupations de sécurité ou de conformité.</li>
                    <li>Vous acceptez de ne pas tenir notre entreprise, nos employés ou nos partenaires responsables de tout dommage, perte ou responsabilité découlant de l'utilisation d'un objet loué.</li>
                </ol>
                <p>En louant des objets sur notre site web, vous reconnaissez avoir lu et compris ces conditions et vous acceptez de vous y conformer.</p>
            </div>     
            `,
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'J\'accepte',
            cancelButtonText: 'Je refuse',
        }).then((result) => {
            if (result.isConfirmed) {
                // Activer le bouton d'inscription
                document.getElementById('registerBtn').removeAttribute('disabled');
            } else {
                // Rediriger l'utilisateur vers la popup des conditions
                showTermsPopup();
            }
        });
    }

    // Afficher la popup des conditions au chargement de la page
    window.onload = showTermsPopup;
</script>

@endsection







<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CollabRent</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
.notification-container {
    position: relative;
}
#notification-btn {
    position: relative;
    z-index: 1;
    background-color: #fff;
    border: none;
    font-size: 16px;
    color: #333;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 25px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
#notification-btn:hover {
    background-color: #f5f5f5;
}
#notification-btn .badge {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #ff6347;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    text-align: center;
    line-height: 20px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
#notification-dropdown {
    position: absolute;
    top: 50px;
    right: 0;
    z-index: 999;
    width: 300px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    overflow-y: scroll;
    max-height: 300px;
}

#notification-dropdown ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#notification-dropdown li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    color: #333; /* updated color */
}
#notification-dropdown li:last-child {
    border-bottom: none;
}
#notification-dropdown li .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 16px;
    color: #000;
    cursor: pointer;
}



        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>// Wait until the document is ready before running any code
         
                $(document).ready(function() {
    // Event listener to show/hide the notification dropdown
    $('#notification-btn').click(function() {
        // Show or hide the dropdown
        $('#notification-dropdown').toggle();

        // Add scroll functionality to the dropdown
        var notificationDropdown = document.getElementById('notification-dropdown');
        notificationDropdown.style.maxHeight = "200px";
        notificationDropdown.style.overflowY = "auto";
    });

    // Event listener to mark a notification as read
    $('ul').on('click', 'li form button[type="submit"]', function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Get the form and notification ID from the form's action URL
        var form = $(this).parent();
        var url = form.attr('action');
        var notificationId = url.substr(url.lastIndexOf('/') + 1);

        // Send an AJAX request to mark the notification as read
        $.ajax({
            type: 'POST',
            url: url,
            data: {'_token': '{{ csrf_token() }}'},
            success: function(data) {
                // Fade out the notification item and remove it from the list
                form.parents('li').fadeOut(300, function() {
                    $(this).remove();
                });

                // Update the notification count badge
                var badge = $('#notification-btn .badge');
                var count = parseInt(badge.text());
                if (!isNaN(count) && count > 0) {
                    badge.text(count - 1);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus + ': ' + errorThrown);
            }
        });
    });

    // Event listener to hide the notification dropdown when clicking outside of it
    $(document).click(function(event) {
        if (!$(event.target).closest('#notification-btn').length && !$(event.target).closest('#notification-dropdown').length) {
            $('#notification-dropdown').hide();
        }
    });

    // Event listener to close notifications when clicking the "X" button
    $('.close-button').click(function() {
        // Get the notification popup and mark-as-read form
        var popup = $(this).parent();
        var form = popup.find('form#mark-as-read-form');

        // Submit the form to mark the notification as read
        form.submit();

        // Fade out and remove the notification popup
        popup.fadeOut(300, function() {
            $(this).remove();
        });
    });
});

            </script>
           
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CLR
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                @if(request()->routeIs(['login', 'register']) === false)
                      <div class="notification-container">
                        <button id="notification-btn">
                            <i class="fa fa-bell"></i>
                            @php
    $count = auth()->check() ? auth()->user()->unreadNotifications->count() : 0;
    Log::info('Notification count: ' . $count);
@endphp
<span class="badge">{{ $count }}</span>

                            <span>Notifications</span>
                          
                        </button>
                        <div id="notification-dropdown" class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @if (auth()->check() && auth()->user()->unreadNotifications->count() > 0)
                            <div class="alert alert-info">
                            <ul>
                            @foreach (auth()->user()->unreadNotifications as $notification)
                            @if ($notification->type == 'App\Notifications\ObjectReturned')
                            @php
                            $object = App\Models\Objet::find($notification->data['object_id']);
                            $dateFin = Carbon\Carbon::parse($object->date_fin);
                            $today = Carbon\Carbon::today();
                            $reservation = App\Models\Reserver::where('id_objet', $object->id_objet)->where('status', 'accepted')->first();
                            @endphp
                            @if ($reservation && $reservation->status == 'accepted' && $dateFin->isToday())
                            <li>
                            <li>
                            <span class="notification-text">La réservation pour l'objet "{{ $object->nom_objet }}" est terminée. Veuillez remplir le formulaire dans les Commentaires.</span>
                            <button class="close-button" onclick="closePopup()">X</button>
                            <form id="mark-as-read-form" action="{{ route('mark_notification_as_read', ['id' => $notification->id]) }}" method="POST">
                            @csrf
                            <button type="submit" style="display:none;"></button>
                            </form>
                            </li>
                            </li>
                            @endif
                            @elseif ($notification->type == 'App\Notifications\ReservationNotification')
                            <li>
                            <span class="notification-text">Nouvelle demande de réservation pour {{ $notification->data['objet_name'] }} à {{ $notification->created_at->format('d/m/Y à H:i') }}</span>
                            <button class="close-button" onclick="closePopup()">X</button>
                            <form id="mark-as-read-form" action="{{ route('mark_notification_as_read', ['id' => $notification->id]) }}" method="POST">
                            @csrf
                            <button type="submit" style="display:none;"></button>
                            </form>
                            </li>
                            @elseif ($notification->type == 'App\Notifications\ReservationResponse')
                            @if ($notification->data['status'] === 'accepted' || $notification->data['status'] === 'refused')
                            <li>
                            <span class="notification-text">Votre réservation pour l'objet {{ $notification->data['object_name'] }} a été {{ $notification->data['status'] }} à {{ $notification->created_at->format('d/m/Y à H:i') }}</span>
                            <button class="close-button" onclick="closePopup()">X</button>
                            <form id="mark-as-read-form" action="{{ route('mark_notification_as_read', ['id' => $notification->id]) }}" method="POST">
                            @csrf
                            <button type="submit" style="display:none;"></button>
                            </form>
                            </li>
                            @endif
                            @endif
                            @endforeach
                            </ul>
                            </div>
                            @else
                            <div class="alert alert-info">
                            <span class="notification-text">Aucune notification pour le moment.</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
             @endif
                    
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
   

</body>
</html>

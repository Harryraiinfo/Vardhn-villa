<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('Images/Img/logo-vardhn-villa.png') }}" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Rooms
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="btnn btn-wrning text-dark "><a class="btnn btn-wrning text-dark " href="{{ route('roomlist') }}">Room List</a></li>
                        <li class="btnn btn-wrning text-dark "><a class="btnn btn-wrning text-dark " href="{{ route('room-details') }}">Room Details</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('facilities') }}">Facilities</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="{{ route('food') }}">Food</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{ route('gallery-pic') }}">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('attractions') }}">Attractions</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Map</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" target="_blank">Admin Login</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li> -->
            </ul>

            <!-- <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a> -->
            <a href="#" class="btn btn-outline-warning">Reviews</a>
        </div>
    </div>
</nav>
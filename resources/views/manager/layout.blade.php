<!DOCTYPE html>
<html>

<head>
    <title>Manager Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div class="d-flex">


        <div class="bg-dark text-white p-3" style="width:250px; height:100vh;">
            <h4>Manager</h4>
            <hr>

            <ul class="nav flex-column">
                <li> <a href="{{ route('manager.dashboard') }}" class="nav-link text-white">Dashboard</a></li>

                <li><a href="{{ route('manager.bookings') }}" class="nav-link text-white">Bookings</a></li>
                <hr>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-warning w-100">Logout</button>
                </form>
            </ul>
        </div>


        <div class="p-4 w-100">
            @yield('content')
        </div>

    </div>

</body>

</html>
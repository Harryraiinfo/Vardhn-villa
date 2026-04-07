<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Panel - Vardhn Villa</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Images/Img/logo-vardhn-villa-removebg.png') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f5f6fa;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #111;
            color: #fff;
            transition: 0.3s;
            padding-top: 20px;
            z-index: 1000;
        }

        .sidebar.hide {
            margin-left: -250px;
        }

        .sidebar h4 {
            text-align: center;
            color: #FFD700;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #ccc;
            padding: 12px 20px;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #FFD700;
            color: #000;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            transition: 0.3s;
        }

        .main.full {
            margin-left: 0;
        }

        /* NAVBAR */
        .topbar {
            background: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* .topbar>span {
            display: none;
        } */

        .menu-btn {
            font-size: 22px;
            cursor: pointer;
        }

        /* CARDS */
        .card-box {
            border-radius: 12px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .card-box:hover {
            transform: translateY(-5px);
        }

        .card-box h6 {
            color: #888;
        }

        .card-box h3 {
            margin-top: 10px;
        }

        .logo-close {
            display: flex;
            justify-content: space-around;
            align-items: baseline;
        }

        .logo-close>span {
            display: none;
        }

        /* RESPONSIVE */
        @media(max-width: 768px) {
            .sidebar {
                margin-left: -250px;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .main {
                margin-left: 0;
            }

            .logo-close>span {
                display: contents;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="logo-close">
            <h4>VARDHN VILLA</h4>
            <span class="menu-btn" onclick="toggleSidebar()">
                <i class="bi bi-x fs-3"></i>
            </span>
        </div>

        <a href="{{ route('manager.dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="{{ route('manager.bookings') }}">
            <i class="bi bi-calendar-check"></i> Bookings
        </a>

        <a href="{{ route('bill.show', $booking->id) }}">
            <i class="bi bi-receipt"></i> Create Bill
        </a>

        <form method="POST" action="{{ route('logout') }}" class="p-3">
            @csrf
            <button class="btn btn-warning w-100">Logout</button>
        </form>
    </div>

    <!-- MAIN -->
    <div class="main" id="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <span class="menu-btn" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </span>

            <h5 class="mb-0">Manager Dashboard</h5>

            <div>
                <i class="bi bi-person-circle fs-4"></i>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="p-2">
            @yield('content')
        </div>

    </div>

    <script>
        function toggleSidebar() {
            let sidebar = document.getElementById('sidebar');
            let main = document.getElementById('main');

            if (window.innerWidth <= 768) {
                sidebar.classList.toggle('show');
            } else {
                sidebar.classList.toggle('hide');
                main.classList.toggle('full');
            }
        }
    </script>

</body>

</html>
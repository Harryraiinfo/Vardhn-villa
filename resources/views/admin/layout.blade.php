<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel - Vardhn Villa</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/Img/Vardhn_Villa_logo.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Responsive */
        /* @media(max-width: 768px) {

            .card-table {
                overflow: scroll;
            }
        } */

        .dashboard {
            padding: 20px;
        }

        /* Cards */
        .stat-card {
            border-radius: 15px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.3s;
            background: #fff;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h6 {
            color: #888;
            font-size: 14px;
        }

        .stat-card h2 {
            margin: 5px 0 0;
            font-weight: bold;
        }

        .stat-card .icon {
            font-size: 30px;
        }

        /* Table */
        .table-card {
            border-radius: 15px;
        }

        .table th {
            font-size: 14px;
        }

        .table td {
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stat-card {
                flex-direction: column;
                text-align: center;
            }

            .stat-card .icon {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body class="bg-light">


    <nav class="navbar navbar-dark bg-dark px-4">
        <span class="navbar-brand text-center">Admin Panel</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-warning btn-sm">Logout</button>
        </form>
    </nav>


    <div class="container mt-4">
        @yield('content')
    </div>

</body>

</html>
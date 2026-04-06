<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VARDHN VILLA</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Images/Img/logo-vardhn-villa-removebg.png') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
                url('your-hotel-image.jpg') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* LOGIN CARD */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px 25px;
            border-radius: 12px;
            background: rgba(17, 17, 17, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.25);
            text-align: center;
        }

        /* HEADING */
        .login-container h2 {
            color: #FFD700;
            font-size: 26px;
            margin-bottom: 8px;
        }

        .login-container p {
            color: #bbb;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* INPUT */
        .input-box {
            margin-bottom: 18px;
        }

        .input-box input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 6px;
            border: 1px solid transparent;
            outline: none;
            background: #222;
            color: #fff;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: #FFD700;
        }

        /* .input-box label {
            text-align: left;
        } */
        form {
            text-align: left;
        }

        /* BUTTON */
        .btn {
            width: 100%;
            padding: 12px;
            background: #FFD700;
            border: none;
            border-radius: 6px;
            color: #000;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e6c200;
        }

        /* EXTRA LINKS */
        .extra {
            margin-top: 15px;
            font-size: 13px;
        }

        .extra a {
            color: #FFD700;
            text-decoration: none;
        }

        .extra a:hover {
            text-decoration: underline;
        }

        /* RESPONSIVE BREAKPOINTS */

        /* Tablets */
        @media (max-width: 768px) {
            .login-container {
                padding: 25px 20px;
            }

            .login-container h2 {
                font-size: 22px;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .login-container {
                padding: 20px 15px;
            }

            .login-container h2 {
                font-size: 20px;
            }

            .btn {
                padding: 11px;
            }
        }
    </style>
</head>

<body>


    <div class="login-container ">

        <h2>Welcome Back</h2>
        <p>Login to VARDHN VILLA</p>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->

            <div class="input-box mb-3">
                <label class="form-label text-white">Email address</label>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>

            <!-- Password -->
            <div class="input-box mb-3">
                <label class="form-label text-white">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>


            <button class="btn" type="submit">Login</button>

            <!-- Error -->
            @if(session('error'))
            <div class="alert alert-danger py-2">
                {{ session('error') }}
            </div>
            @endif
        </form>
        <!-- <div class="extra">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div> -->
    </div>

</body>

</html>
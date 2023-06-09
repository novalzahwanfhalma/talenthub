<!DOCTYPE html>
<html>

<head>

    <title>Form Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #60839b;
        }


        .container {
            width: 400px;
            margin: 0 auto;
            padding: 3rem;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h2 {
            text-align: center;
            color: #000000;
        }

        h4 {
            text-align: center;
            color: #000000;
        }

        label {
            display: block;
            margin-top: 10px;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #707070;
            border-radius: 8px;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        .hide {
            display: none;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        input[type="submit"] {
            background-color: #5e90ca;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .fade-in {
            animation: fadeIn 1s;
        }

        .checkbox-container {
            margin-top: 10px;
            opacity: 0;
            animation: slideIn 1s forwards;
        }

        .checkbox-container label {
            display: inline;
            font-size: 14px;
            color: #333;
        }

        /* Animasi Menarik */
        .animation-container {
            position: relative;
            overflow: hidden;
            height: 0;
            padding-top: 56.25%;
        }

        .animation-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .animation-slide {
            animation: slideIn 1s;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 200px;
            /* Sesuaikan dengan lebar maksimum yang diinginkan */
            max-height: 200px;
            /* Sesuaikan dengan tinggi maksimum yang diinginkan */
        }
    </style>
    @stack('head')
</head>

<body>
    <div class="container fade-in">
        <div class="logo-container">
            <img src="{{ asset('style/assets/img/logothub.png') }}" alt="Logo">
        </div>
        <h2>Autentikasi</h2>
        <form action="{{ route('postlogin') }}" method="POST">
            @csrf
            <h4>Mahasiswa</h4>

            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="checkbox-container">
                <label for="new"><a href="/regis">Belum memiliki akun?</a></label>
            </div>

            <div class="button-container">

                <button class="btn btn-primary btn-block" type="submit" value="Login"
                    style="background-color: #3aa7a9; color: #FFFFFF; border-radius: 30px; padding: 12px 24px; font-size: 18px;">Login</button>


            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    @if (session('notifikasi'))

        <script>
                Swal.fire({
                    text: '{{ session('notifikasi') }}',
                    icon: '{{ session('type') }}',
                    confirmButtonText: 'OK',
                    timer: 2000,
                });

        </script>
    @endif



    @stack('body')

</body>

</html>

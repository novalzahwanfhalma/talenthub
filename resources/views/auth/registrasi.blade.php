<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>

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
            border: 1px solid #3a3a3a;
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
            color: #ffffff;
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
            color: #ff0000;
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
        <h2>Registrasi</h2>
        <form action="{{ route('simpanregistrasi') }}" method="POST">
            <h4>Mahasiswa</h4>
            @csrf
            <label for="nim" id="nimLabel">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control form-control-user"
                @error('nim') is-invalid @enderror value="{{ old('nim') }}" required>

            @error('nim')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control form-control-user"
                @error('nama') is-invalid @enderror value="{{ old('nama') }}" required>

            @error('nama')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control form-control-user"
                @error('email') is-invalid @enderror value="{{ old('email') }}" required>

            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="username">Username:</label>
            <input type="username" id="username" name="username" class="form-control form-control-user"
                @error('username') is-invalid @enderror value="{{ old('username') }}" required>

            @error('username')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="no_hp">Nomor Handphone:</label>
            <input type="text" id="no_hp" name="no_hp" class="form-control form-control-user"
                @error('no_hp') is-invalid @enderror value="{{ old('no_hp') }}" required>

            @error('no_hp')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="alamat">Alamat:</label>
            <input type="alamat" id="alamat" name="alamat" class="form-control form-control-user"
                @error('alamat') is-invalid @enderror value="{{ old('alamat') }}" required>

            @error('alamat')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control form-control-user"
                @error('password') is-invalid @enderror value="{{ old('password') }}" required>

            @error('password')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror


            <div class="checkbox-container">
                <label for="existing"><a href="/login">Sudah memiliki akun?</a></label>
            </div>

            <div class="button-container">

                <button class="btn btn-primary btn-block" type="submit" value="Daftar"
                    style="background-color: #3aa7a9; color: #FFFFFF; border-radius: 30px; padding: 12px 24px; font-size: 18px;">Daftar</button>


            </div>
        </form>
    </div>


    @stack('body')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    <script>
        // Function to display success notification
        function showSuccessNotification(message) {
            Swal.fire({
                text: message,
                icon: 'success',
                confirmButtonText: 'OK',
                timer: 2000
            });
        }

        // Function to display error notification
        function showErrorNotification(message) {
            Swal.fire({
                text: message,
                icon: 'error',
                confirmButtonText: 'OK',
                timer: 2000
            });
        }

        // Check if the session has success or error messages
        const notifikasi = '{{ session('notifikasi') }}';
        const type = '{{ session('type') }}';

        // Display the appropriate notification based on the session message
        if (notifikasi) {
            if (type === 'success') {
                showSuccessNotification(notifikasi);
            } else if (type === 'error') {
                showErrorNotification(notifikasi);
            }
        }
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Log in</title>
    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/style1.css') }}" rel="stylesheet">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="box"></div>
        <div class="container-forms">
            <div class="container-info">
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell">
                            <p>
                                Punya akun?
                            </p>
                            <div class="btn">
                                Log in
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell">
                            <p>
                                Belum punya akun?
                            </p>
                            <div class="btn">
                                Registrasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-form">
                <div class="form-item log-in">
                    <div class="table">
                        <div class="table-cell">
                            <input name="Username" placeholder="Username" type="text" /><input name="Password"
                                placeholder="Password" type="Password" />
                            <div class="btn">
                                Log in
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-item sign-up">
                    <div class="table">
                        <div class="table-cell">
                            <input name="email" placeholder="Username" type="text" /><input name="Password"
                                placeholder="Password" type="Password" />
                            <div class="btn">
                                Registrasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="{{ asset('style/assets/js/main1.js') }}"></script>

</body>

</html>

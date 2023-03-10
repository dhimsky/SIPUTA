
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login-SIPUTA</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('/') }}plugins/images/favicon.png">
    <link href="{{ asset ('/') }}plugins/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4">SIPUTA
                                        <h6 class="text-center mb-4" style="color: darkgray">Sistem Informasi Pembuatan Kartu Tanda Mahasiswa</h6>
                                    </h2>
                                    <form action="{{ url('login/proses') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Usename</strong></label>
                                            <input autofocus type="text" class="form-control
                                            @error('username')
                                            is-invalid
                                            @enderror
                                            " placeholder="Username" name="username" value="{{ old('username') }}">
                                            @error('username')
                                                <div class="invailid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control
                                            @error('password')
                                            is-invalid
                                            @enderror
                                            " placeholder="Password" name="password">
                                            @error('password')
                                                <div class="invailid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            {{-- <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset ('/') }}vendor/global/global.min.js"></script>
    <script src="{{ asset ('/') }}plugins/js/quixnav-init.js"></script>
    <script src="{{ asset ('/') }}plugins/js/custom.min.js"></script>

</body>

</html>
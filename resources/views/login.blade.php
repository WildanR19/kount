<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kount</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('img/logo-with-text.svg') }}" alt="Logo">
        </div>
        <div class="col">
            <div class="card">
                <div class="title">Member Login</div>
                <form action="{{ route('dash.home') }}">
                    <div class="form-group">
                        <label for="login-email"><i class="fas fa-envelope"></i></label>
                        <input type="email" name="login-email" id="login-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="login-password"><i class="fas fa-lock"></i></label>
                        <input type="password" name="login-password" id="login-password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn-login"><em>Log In</em></button>
                </form>
                <div class="text-center">Forgot your <a href=""><strong>login details?</strong></a></div>
            </div>
        </div>
    </div>
</body>
</html>

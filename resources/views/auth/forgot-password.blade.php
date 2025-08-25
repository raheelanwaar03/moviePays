



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <x-alert/>
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-white">Request For Password Reset Link</h1>
            </div>
        </div>
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-body">
                        <form action="{{ route('password.email') }}" method="POST" class="account-form">
                            @csrf
                            <div class="form-group">
                                <label for="sign-up" class="text-white">Your Working Email </label>
                                <input type="text" placeholder="Give Us Your Working Email" class="form-control" id="sign-up" name="email">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Email Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-success">
                        <div class="account-header pb-0" style="font-size:25px">
                            <span class="d-block mb-30 mt-2">Give us your working email for getting Password reset link.</span>
                            <span class="d-block mt-15">Don't have an account? <a href="{{ route('register') }}" class="text-light">Sign Up</a> or <span><a href="{{ route('login') }}" class="text-light">Sign In</a></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

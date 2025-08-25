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

<body
    style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <x-alert />
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-white">Change Your Password</h1>
            </div>
        </div>
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-body">
                        <form action="{{ route('password.store') }}" method="POST" class="account-form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <label for="sign-up"  class="text-white">Your Email </label>
                                <input type="email" class="form-control" placeholder="Enter Your Email " id="sign-up" name="email">
                            </div>
                            <div class="form-group">
                                <label for="pass"  class="text-white">New Password</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" id="pass" name="password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="form-group" >
                                <label for="pass" class="text-white">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" id="pass"
                                    name="password_confirmation">
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            <div class="form-group text-center">
                                <button type="submit" class="mt-2 mb-2 btn btn-success text-white">Reset Password</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-success">
                        <div class="account-header pb-0" style="font-size:25px">
                            <span class="d-block mb-30 mt-2 text-white">Change your passwod easily!</span>
                            <span class="d-block mt-15">Remeber password<span><a href="{{ route('login') }}"
                                        class="text-light">Sign In</a></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

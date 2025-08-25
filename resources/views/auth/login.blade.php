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
    style="background-image: url({{ asset('assets/img/bg.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Login New {{ env('APP_NAME') }}</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-body">
                        <x-alert/>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Email</b></label>
                                <input type="text" style="background: transparent;color:white " name="email"
                                    class="form-control" placeholder="Enter Your Email">
                            </div>
                            <span>
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Password</b></label>
                                <input type="password" style="background: transparent;color:white " name="password"
                                    class="form-control" placeholder="Enter Your Password">
                            </div>
                            <span>
                                @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="{{ route('password.request') }}" class="btn btn-outline-primary text-white">Reset Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light"><a href="{{ route('register') }}" class=" text-white">Create New Account</a></h1>
            </div>
        </div>
    </div>
</body>

</html>

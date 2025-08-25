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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Register To {{ env('APP_NAME') }}</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-body">
                        <x-alert />
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">User Name</b></label>
                                <input type="text" name="name" style="background: transparent;color:white "
                                    class="form-control" placeholder="Enter Your Name" required>
                            </div>
                            <span>
                                @error('name')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Email</b></label>
                                <input type="email" style="background: transparent;color:white " name="email"
                                    class="form-control" placeholder="Enter Your Email" required>
                            </div>
                            <span>
                                @error('email')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Phone Number</b></label>
                                <input type="text" style="background: transparent;color:white " name="phone"
                                    class="form-control" placeholder="Enter Your Phone Number" required maxlength="11">
                            </div>
                            <span>
                                @error('phone')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Select Plan</b></label>
                                <select name="plan" class="form-control">
                                    <option value="silver">Silver: 500</option>
                                    <option value="gold">Gold: 1000</option>
                                    <option value="dimond">Dimond: 1500</option>
                                </select>
                            </div>
                            <span>
                                @error('plan')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Password</b></label>
                                <input type="password" style="background: transparent;color:white " name="password"
                                    class="form-control" placeholder="Enter Your Password" required minlength="8"
                                    maxlength="12">
                            </div>
                            <span>
                                @error('password')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Confirm Password</b></label>
                                <input type="password" style="background: transparent;color:white "
                                    name="password_confirmation" class="form-control"
                                    placeholder="Enter Your Confirm Password" required minlength="8" maxlength="12">
                            </div>
                            <span>
                                @error('password_confirmation')
                                    <div class="text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </span>
                            <div class="form-group">
                                <label style="color:white"><b style="font-size: 25px">Referal</b></label>
                                <input type="text" name="referal" value="{{ $referal }}"
                                    class="form-control text-dark" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light"><a href="{{ route('login') }}" class="text-white">Sign In</a></h1>
            </div>
        </div>
    </div>
</body>

</html>

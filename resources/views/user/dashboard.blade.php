<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://www.youtube.com/iframe_api"></script>

</head>

<body style="background-image: url({{ asset('assets/img/bg.jpg') }});">

    <x-alert/>

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: blue">
                    <a href="{{ route('User.Dashboard') }}" class="text-center text-decoration-none">
                        <div style="float:left;">
                            <img src="{{ asset('assets/logo.png') }}" alt="" height="80px" width="80px">
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row m-3">
        <div class="col-sm-12 d-flex justify-content-center align-items-center">
            <div class="col-sm-4">
                <a href="{{ route('User.Widthraw.Balance') }}" class="text-decoration-none card_css">
                    <div class="card" style="background-color: blue;">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="fa-solid fa-money-bill-transfer" style="font-size:25px;"></i>
                            </div>
                            <h5 class="text-decoration-none text-center">Widthraw</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ route('User.Team') }}" class="text-decoration-none card_css">
                    <div class="card" style="background-color: blue;">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-decoration-none text-center">Team</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                    <a href="{{ route('User.Rules') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: blue;">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa-solid fa-address-book" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Rules</h5>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('User.All.Videos') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: blue;">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-play" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Watch Video</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('User.About-Us') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: blue;">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa-solid fa-house-circle-exclamation" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">About Us</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="mailto:raheelanwaar28@gmail.com?subject=Mail from our Website" class="text-decoration-none card_css">
                        <div class="card" style="background-color: blue;">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa-solid fa-comment-dots" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Contact us</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('profile.edit') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: blue;">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa fa-user-circle-o" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Profile</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row w-100">
            <div class="col-12 p-4">
                <div class="nav d-flex justify-content-center">
                    @if (auth()->user())
                    <div class="">
                        <div class="mb-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <ul class="nav flex-column">
                    <li class="nav-item">
    <a class="nav-link btn btn-primary m-3" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-primary m-1" href="{{ route('register') }}">Register</a>
    </li>
</ul> @endif
    </div>
    </div>
    </div>
    </div>
    </body>

</html>

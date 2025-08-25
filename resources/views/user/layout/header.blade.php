<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="9lQReAOP7TYMbm5nNnK5b7NtKpmZuMGXAIriNN7M">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Some description for the page" />
    <meta property="og:title" content="Lezato : Restaurant Admin Laravel Template" />
    <meta property="og:description" content="Lezato | Dashboard" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">
    <title>User | Dashboard</title>
    {{-- css --}}
    <link href="{{ asset('admin/public/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/public/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/public/css/style.css') }}" rel="stylesheet" type="text/css" />

    {{-- youtube api --}}

    <script src="https://www.youtube.com/iframe_api"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1SCXYNG06"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z1SCXYNG06');
    </script>

</head>

<body>
    <x-alert />
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="p-2">
                <h5>{{ env('APP_NAME') }}</h5>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Find something here......">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="{{ route('User.Dashboard') }}">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" width="150px"
                                        height="60px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        {{-- links --}}

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.Dashboard') }}" aria-expanded="false">
                            <i class="ti-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('User.Widthraw.Balance') }}">
                            <i class="ti-money"></i>
                            <span class="nav-text">My Earnings</span>
                        </a>
                    </li>
                    <li><a href="{{ route('User.Work') }}" class="has-arrow ai-icon">
                            <i class="ti-blackboard"></i>
                            <span class="nav-text">Daily Task</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('User.Refer.New.Friend') }}">
                            <i class="ti-comments-smiley"></i>
                            <span class="nav-text">Invite</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('User.Team') }}">
                            <i class="ti-bar-chart"></i>
                            <span class="nav-text">My Group</span>
                        </a>
                    </li>
                    <li><a href="{{ route('User.Contact.Us') }}" class="has-arrow ai-icon">
                            <i class="ti-id-badge"></i>
                            <span class="nav-text">Contact Us</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('User.Setting') }}">
                            <i class="ti-user"></i>
                            <span class="nav-text">Profile</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('profile.edit') }}">
                            <i class="ti-settings"></i>
                            <span class="nav-text">Setting</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary">Logout</button>
                        </form>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} coypright</strong> © 2019 All Rights Reserved</p>
                </div>
            </div>
        </div>








        {{-- old --}}


        {{-- <div class="nav-header p-5">
            <a href="{{ route('LandingPage') }}" class="brand-logo">
                <img src="{{ asset('admin/public/images/logo.png') }}" height="60px" width="188px" alt="logo">
            </a>
            <div class="nav-control ml-5">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="nav-item">
                                <div class="input-group search-area">
                                    <img src="{{ asset('admin/public/images/logo.png') }}" height="60px" width="188px"
                                        alt="logo">
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item recipe">
                                <form action="{{ route('logout') }}" method="Post">
                                    @csrf
                                    <button class="btn btn-primary btn-rounded">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        {{-- links --}}

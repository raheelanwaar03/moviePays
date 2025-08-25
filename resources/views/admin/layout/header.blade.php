<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ env('APP_NAME') }} | Admin Dashboad</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/colors/default.css') }}" id="colorSkinCSS">
    <script src="https://www.youtube.com/iframe_api"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

</head>

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="side_menu_title">
                <span>Dashboard</span>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="{{ route('Admin.Dashboard') }}" aria-expanded="false">
                    Dashboard
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                    <span>Users</span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.All.Users') }}">All Users</a></li>
                    <li><a href="{{ route('Admin.Pending.Users') }}">Pending Users</a></li>
                    <li><a href="{{ route('Admin.Approved.Users') }}">Approved Users</a></li>
                    <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected Users</a></li>
                    <li><a href="{{ route('Admin.Today.Approved.User') }}">Today's Approved</a></li>
                    <li><a href="{{ route('Admin.Vistors') }}">Today's Vistors</a></li>
                </ul>
            </li>
            <li class="side_menu_title">
                <span>Others</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/4.svg') }}" alt="">
                    <span><b>Settings</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.Setting.index') }}">Add Referal limit</a></li>
                    <li><a href="{{ route('Admin.Level.View') }}">Level setting</a></li>
                    <li><a href="{{ route('Admin.Easypaisa.index') }}">Payment Page Details</a></li>
                    <li><a href="{{ route('Admin.Add.Verification.Details') }}">Verification Page Text</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/5.svg') }}" alt="">
                    <span><b>Task</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.Product.create') }}">Add New Task</a></li>
                    <li><a href="{{ route('Admin.Product.index') }}">All Tasks</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/7.svg') }}" alt="">
                    <span><b>Widthraw</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.All.Widthraw.Requests') }}">All Widthraw Request</a></li>
                    <li><a href="{{ route('Admin.Approved.Widthraw') }}">Approved Widthraw</a></li>
                    <li><a href="{{ route('Admin.Rejected.Widthraw') }}">Rejected Widthraw</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    {{-- <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="side_menu_title">
                <span>Dashboard</span>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="{{ route('Admin.Dashboard') }}" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/1.svg') }}" alt="">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="side_menu_title">
                <span></span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                    <span>Users</span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.All.Users') }}">All Users</a></li>
                    <li><a href="{{ route('Admin.Pending.Users') }}">Pending Users</a></li>
                    <li><a href="{{ route('Admin.Approved.Users') }}">Approved Users</a></li>
                    <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected Users</a></li>
                    <li><a href="{{ route('Admin.Today.Approved.User') }}">Today's Approved</a></li>
                    <li><a href="{{ route('Admin.Vistors') }}">Today's Vistors</a></li>
                </ul>
            </li>
            <li class="side_menu_title">
                <span>Others</span>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/4.svg') }}" alt="">
                    <span><b>Settings</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.Setting.index') }}">Add Referal limit</a></li>
                    <li><a href="{{ route('Admin.Level.View') }}">Level setting</a></li>
                    <li><a href="{{ route('Admin.Easypaisa.index') }}">Payment Page Details</a></li>
                    <li><a href="{{ route('Admin.Add.Verification.Details') }}">Verification Page Text</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/5.svg') }}" alt="">
                    <span><b>Task</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.Product.create') }}">Add New Task</a></li>
                    <li><a href="{{ route('Admin.Product.index') }}">All Tasks</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="{{ asset('assets/img/menu-icon/7.svg') }}" alt="">
                    <span><b>Widthraw</b></span>
                </a>
                <ul>
                    <li><a href="{{ route('Admin.All.Widthraw.Requests') }}">All Widthraw Request</a></li>
                    <li><a href="{{ route('Admin.Approved.Widthraw') }}">Approved Widthraw</a></li>
                    <li><a href="{{ route('Admin.Rejected.Widthraw') }}">Rejected Widthraw</a></li>
                </ul>
            </li>
        </ul>
    </nav> --}}

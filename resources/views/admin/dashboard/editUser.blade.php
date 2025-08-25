@extends('admin.layout.app')

@section('content')
    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="{{ asset('admin/img/icon/icon_search.svg') }}"
                                            alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('admin/img/client_img.png') }}" alt="#">
                                <div class="profile_info_iner">
                                    <p>{{ auth()->user()->role }} </p>
                                    <h5>{{ auth()->user()->name }}</h5>
                                    <div class="profile_info_details">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <button type="submit" style="border: none;font-size:16px;color:white;"
                                                class="bg-transparent">Log Out <i class="ti-shift-left"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Admin Edit User</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title text-center">User Details</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('Admin.Update.User', ['id' => $user->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="" class="ml-2">Name</label>
                                                    <input type="text" name="name" value="{{ $user->name }}"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="ml-2">Email</label>
                                                    <input type="text" name="email" value="{{ $user->email }}"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="ml-2">Level</label>
                                                    <input type="text" name="level" value="{{ $user->level }}"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="ml-2">Balance</label>
                                                    <input type="text" name="balance" value="{{ $user->balance }}"
                                                        class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

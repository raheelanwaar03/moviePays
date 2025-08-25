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
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('admin/img/icon/man.svg') }}" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ allUser() }}</span> </h3>
                                                    <p>Total Users</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('admin/img/icon/man.svg') }}" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ pendingUsers() }}</span> </h3>
                                                    <p>Pending Users</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('admin/img/icon/man.svg') }}" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ verifiedUsers() }}</span> </h3>
                                                    <p>Approved Users</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('admin/img/icon/man.svg') }}" alt="">
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ rejectedUsers() }}</span> </h3>
                                                    <p>Rejected Users</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ todayApprovedWidthraw() }}</span>
                                                    </h3>
                                                    <p>Today Given Widthraw</p>
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ totalGivenWidthraw() }}</span>
                                                    </h3>
                                                    <p>Total Widthraw</p>
                                                </div>
                                            </div>
                                            <div class="single_quick_activity d-flex">
                                                <div class="count_content">
                                                    <a href="{{ route('Admin.Set.User.Level') }}"
                                                        class="btn btn-primary">Give Level</a>
                                                </div>
                                            </div>
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

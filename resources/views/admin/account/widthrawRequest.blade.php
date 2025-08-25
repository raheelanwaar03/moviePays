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

        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Widthraw Request</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-responsive table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Bank</th>
                                                <th>Number</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($widthrawRequests as $widthrawRequest)
                                                <tr>
                                                    <td>{{ $widthrawRequest->widthraw_name }}</td>
                                                    <td>{{ $widthrawRequest->widthraw_bank }}</td>
                                                    <td>{{ $widthrawRequest->widthraw_num }}</td>
                                                    <td>{{ $widthrawRequest->widthraw_amount }}</td>
                                                    <td>{{ $widthrawRequest->status }}</td>
                                                    <td>
                                                        <a href="{{ route('Admin.Approve.Widthraw', ['id' => $widthrawRequest->id]) }}"
                                                            class="btn btn-sm btn-success">Approve</a>
                                                        <a href="{{ route('Admin.Reject.Widthraw', ['id' => $widthrawRequest->id]) }}"
                                                            class="btn btn-sm btn-danger">Reject</a>
                                                    </td>
                                                    <td>{{ $widthrawRequest->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

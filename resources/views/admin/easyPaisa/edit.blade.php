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
                                <h4 class="card-title">Edit Payment Page Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Easypaisa.update', $easyPaisa->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="" class="m-3">Payment Page Text</label>
                                        <input type="text" name="text" value="{{ $easyPaisa->text }}"
                                            class="form-control" placeholder="Admin add Easypaisa Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Easypaisa Account Number</label>
                                        <input type="number" name="easy_num" value="{{ $easyPaisa->easy_num }}"
                                            class="form-control" placeholder="Admin add Easypaisa Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Easypaisa Holder Name</label>
                                        <input type="text" name="easy_name" value="{{ $easyPaisa->easy_name }}"
                                            class="form-control" placeholder="Easypaisa Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Easypaisa Holder Name</label>
                                        <input type="text" name="bank" value="{{ $easyPaisa->bank }}"
                                            class="form-control" placeholder="Bank">
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

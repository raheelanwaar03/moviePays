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
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit User Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Easypaisa.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="m-3" style="font-size:20px">Payment Page
                                            Text</label>
                                        <input type="text" name="text" class="form-control" placeholder="Admin Text">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3" style="font-size:20px">Account
                                            Number</label>
                                        <input type="number" name="easy_num" class="form-control"
                                            placeholder="Admin add Easypaisa Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3" style="font-size:20px">Account Title</label>
                                        <input type="text" name="easy_name" class="form-control"
                                            placeholder="Easypaisa Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3" style="font-size:20px">Bank</label>
                                        <input type="text" name="easy_name" class="form-control"
                                            placeholder="Easypaisa Username">
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary">add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Applied Limite</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Holder Name</th>
                                                <th>Account Number</th>
                                                <th>Bank</th>
                                                <th>Payment Page Text</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse ($easyPaisas as $easyPaisa)
                                                    <td>{{ $easyPaisa->easy_name }}</td>
                                                    <td>{{ $easyPaisa->easy_num }}</td>
                                                    <td>{{ $easyPaisa->bank }}</td>
                                                    <td>{{ $easyPaisa->text }}</td>
                                                    <td><a href="{{ route('Admin.Easypaisa.edit', $easyPaisa->id) }}"
                                                            class="btn btn-sm btn-primary">Edit Details</a></td>
                                                @empty
                                                    <h4 class="text-center">No Limite Applied Yet</h4>
                                                @endforelse
                                            </tr>
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

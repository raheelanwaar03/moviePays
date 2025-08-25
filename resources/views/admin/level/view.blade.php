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
                                <h4>Admin Dashboard</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Applied Limite</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-responsive table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Level 1</th>
                                                            <th>Level 2</th>
                                                            <th>Level 3</th>
                                                            <th>Level 4</th>
                                                            <th>Level 5</th>
                                                            <th>Level 6</th>
                                                            <th>Level 7</th>
                                                            <th>Level 8</th>
                                                            <th>Level 9</th>
                                                            <th>Level 10</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                   <tbody>
                                                    @foreach ($levels as $level)
                                                    <tr>
                                                        <td>{{ $level->level1 }}</td>
                                                        <td>{{ $level->level2 }}</td>
                                                        <td>{{ $level->level3 }}</td>
                                                        <td>{{ $level->level4 }}</td>
                                                        <td>{{ $level->level5 }}</td>
                                                        <td>{{ $level->level6 }}</td>
                                                        <td>{{ $level->level7 }}</td>
                                                        <td>{{ $level->level8 }}</td>
                                                        <td>{{ $level->level9 }}</td>
                                                        <td>{{ $level->level10 }}</td>
                                                        <td>
                                                            <a href="{{ route('Admin.Edit.Level.View',['id'=>$level->id]) }}" class="btn btn-primary">Edit</a>
                                                        </td>
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
                </div>
            </div>
        </div>
    </section>
@endsection

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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title text-center">Edit level Setting</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('Admin.Update.Level.Setting', $level->id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Level 1 </label>
                                                    <input type="text" name="level1" value="{{ $level->level1 }}"
                                                        placeholder="Enter level 1 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 2 </label>
                                                    <input type="text" name="level2" value="{{ $level->level2 }}"
                                                        placeholder="Enter level 2 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 3 </label>
                                                    <input type="text" name="level3" value="{{ $level->level3 }}"
                                                        placeholder="Enter level 3 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 4 </label>
                                                    <input type="text" name="level4" value="{{ $level->level4 }}"
                                                        placeholder="Enter level 4 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 5 </label>
                                                    <input type="text" name="level5" value="{{ $level->level5 }}"
                                                        placeholder="Enter level 5 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 6 </label>
                                                    <input type="text" name="level6" value="{{ $level->level6 }}"
                                                        placeholder="Enter level 6 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 7 </label>
                                                    <input type="text" name="level7" value="{{ $level->level7 }}"
                                                        placeholder="Enter level 7 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 8 </label>
                                                    <input type="text" name="level8" value="{{ $level->level8 }}"
                                                        placeholder="Enter level 8 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 9 </label>
                                                    <input type="text" name="level9" value="{{ $level->level9 }}"
                                                        placeholder="Enter level 9 after how many user"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Level 10 </label>
                                                    <input type="text" name="level10" value="{{ $level->level10 }}"
                                                        placeholder="Enter level 10 after how many user"
                                                        class="form-control">
                                                </div>
                                                <button class="btn btn-primary mt-3">update</button>
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

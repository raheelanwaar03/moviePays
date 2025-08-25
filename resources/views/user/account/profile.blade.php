@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Welcome to Data Entry Jobs</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-black shadow-lg w-100 mb-3">
                                <div class="card-title">
                                    <h2 class="text-center mt-3">Your Information</h2>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="#" class="mt-6 space-y-6">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->phone }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" value="{{ auth()->user()->address }}" class="form-control" readonly>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <h3 class="text-center">
                                        <a href="{{ route('User.Dashboard') }}"
                                            class="btn btn-outline-success">Dashboard</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

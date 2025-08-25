@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12 text-center">
                                                <h2>Contact us</h2>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Your Name</label>
                                                    <input type="text" name="name" placeholder="Your Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Your Email</label>
                                                    <input type="email" name="email" placeholder="Your Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Massage</label>
                                                    <textarea name="massage" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                                <div class="">
                                                    <button class="btn btn-success text-white">Submit</button>
                                                </div>
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
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Registeration Fees</title>
</head>

<body
    style="background-image: url({{ asset('assets/img/bg.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <x-alert />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row min-vh-100">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <div class="card bg-transparent border-light shadow-lg w-100">
                            <div class="card-title">
                                @forelse ($easyPaisas as $easyPaisa)
                                    <h5 class="text-center text-light mt-3">{{ $easyPaisa->text }}</h5>
                                    <h4 class="text-center text-light">Account Title:
                                        {{ $easyPaisa->easy_name }}</h4>
                                    <h4 class="text-center text-light">Account Number:
                                        {{ $easyPaisa->easy_num }}</h4>
                                    <h4 class="text-center text-light">Bank:
                                        {{ $easyPaisa->bank }}</h4>
                                @empty
                                @endforelse
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Store/Fees/Details') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px">Account Title</b></label>
                                        <input type="text" name="bank_username"
                                            style="background: transparent;color:white " class="form-control"
                                            placeholder="Easypaisa Account Holder">
                                    </div>
                                    <span>
                                        @error('bank_username')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px" minlength="11">Accont
                                                Number</b></label>
                                        <input type="number" name="sender_num"
                                            style="background: transparent;color:white " class="form-control"
                                            placeholder="Easypaisa Account Number" minlength="11" maxlength="11">
                                    </div>
                                    <span>
                                        @error('sender_num')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px">Put Trx or TID</b></label>
                                        <input type="text" style="background: transparent;color:white" name="tid"
                                            class="form-control" placeholder="Enter Your Trx or TID">
                                    </div>
                                    <span>
                                        @error('tid')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </span>
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </form>
                                <form action="{{ route('logout') }}" method="POST" class="mt-3">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

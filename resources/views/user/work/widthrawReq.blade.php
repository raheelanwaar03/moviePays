<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <x-alert />

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Your Earning</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center my-3">Widthraw Balance</h2>
                            <h2 class="text-center my-3">Your Balance: {{ $balance }}</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('User.Widthraw.Balance.Request') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Widthraw Amount</label>
                                    <input type="num" name="widthraw_amount" class="form-control bg-transparent"
                                        placeholder="Enter Amount You want to widthraw" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Account Holder Name</label>
                                    <input type="num" name="widthraw_name" class="form-control"
                                        placeholder="Enter Account Holder Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Account Number</label>
                                    <input type="num" name="widthraw_num" class="form-control"
                                        placeholder="Enter Account Number" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Select Bank</label>
                                    <select class="form-control" name="widthraw_bank">
                                        <option value="easypaisa">Easypaisa</option>
                                        <option value="jazzcash">Jazzcash</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mt-2">Procced</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://www.youtube.com/iframe_api"></script>

</head>

<body style="background-image: url({{ asset('assets/img/bg.jpg') }});">

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: blue">
                    <a href="{{ route('User.Dashboard') }}" class="text-center text-decoration-none">
                        <div style="float:left;">
                            <img src="{{ asset('assets/logo.png') }}" alt="" height="80px" width="80px">
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                    <h4 class="text-center text-white">Team members : ( {{ totalReferal() }} )</h4>
                    <h4 class="text-center text-white">Level : ({{ auth()->user()->level }})</h4>
                    <h4 class="text-center text-white">Package : ({{ auth()->user()->plan }})</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <div class="card bg-transparent text-white" style="border: 1px solid white;">
                        <div class="card-title">
                            <h3 class="text-center mt-3">Your Refer Link</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    value="{{ route('register', ['referal' => Auth::user()->email]) }}"
                                    id="myInput" readonly>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                        <button onclick="copy()" class="btn btn-primary mt-2">copy</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card bg-transparent text-white" style="border: 1px solid white;">
                    <div class="card-header text-white">
                        <h4 class="card-title text-center">All Referal Friends</h4>
                    </div>
                    <div class="card-body text-white">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-stripped">
                                <thead class="text-white">
                                    <tr>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>{{ $user->status }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr> @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

</body>

</html>

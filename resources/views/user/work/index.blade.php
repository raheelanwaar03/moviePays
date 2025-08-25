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
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row m-3">
        <div class="col-md-12">
            <!-- video/show.blade.php -->
            <video controls autoplay="false">
                <source id="{{ $product->id }}" src="{{ asset('images/' . $product->video) }}" type="video/mp4">
            </video>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: blue">
                    <a href="{{ route('LandingPage') }}" class="text-center">
                        <div style="float:left;">
                            <i class="fa-solid fa-door-open" style="color:white;font-size:60px;"></i>
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        {{-- Javascript Code --}}
        <script>
            // redirect page after video ended seconds
            setTimeout(function() {
                window.location.href = "{{ route('User.Type.Task', ['id' => $product->id]) }}";
            }, {{ $product->duration * 1000 }});

            // // show timer 5 seconds
            // var time = {{ $product->duration }};
            // setInterval(function () {
            //     time--;
            //     $('#timer').text(time);
            // }, {{ $product->duration * 1000 }});
        </script>
    </footer>

    </body>

</html>

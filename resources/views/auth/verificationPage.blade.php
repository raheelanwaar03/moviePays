<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body
    style="background-image: url({{ asset('assets/img/bg.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="card border-black shadow-lg w-100">
                    <div class="card-title">
                        <h2 class="text-center mt-3" style="color: blue">Verification</h2>
                    </div>
                    <div class="card-body">
                        @forelse ($verificationText as $text)
                            <p class="text-center" style="font-size:30px;font-family:verdana;color:blue">
                                {{ $text->text }}
                            </p>
                        @empty
                            <h4>Admin have not entered any text yet!</h4>
                        @endforelse
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('LandingPage') }}" class="btn btn-outline-primary">Main Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

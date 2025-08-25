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


    <div class="col-sm-12 d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card bg-transparent" style="border: 1px solid white">
                <div class="card-title">
                    <div class="text-center text-white">
                        <h3>
                            Personal Details
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="#" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-white">Name</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card bg-transparent" style="border: 1px solid white">
                <div class="card-title">
                    <div class="text-center text-white">
                        <h3>
                            Password Modification
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="current_password" class="text-white" :value="__('Current Password')" />
                            <x-text-input id="current_password" name="current_password" type="password"
                                class="mt-1 block w-full form-control" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" class="text-white" :value="__('New Password')" />
                            <x-text-input id="password" name="password" type="password"
                                class="mt-1 block w-full form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" class="text-white" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                class="mt-1 block w-full form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button class='btn btn-primary mt-3'>{{ __('Save') }}
                            </x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">
                                    {{ __('Saved.') }}</p> @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

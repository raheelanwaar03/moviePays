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
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="card">
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
                                            1:18 AM 10/11/2023
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@extends('layouts.app')

@section('content')
    <div class="google-map-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Start of Map Section-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12">
                    <div class="contact-information">
                        <div class="single-contact-info">
                            <div class="contents">
                                <img src="img/icons/c-map.png" alt="">
                                <div class="info-text">
                                    <span class="block">{{ env('APP_ADDRESS') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contents">
                                <img src="img/icons/c-phone.png" alt="">
                                <div class="info-text">
                                    <span class="block">Telephone : {{ env('APP_NUM') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contents">
                                <img src="img/icons/c-globe.png" alt="">
                                <div class="info-text">
                                    <span class="block">Email : {{ env('APP_EMAIL') }}</span>
                                    <span class="block">Web : {{ env('APP_URL') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Google Map-->
    <!--Start Contact Form Area-->
    <div class="contact-form-area fix pb-120">
        <div class="container">
            <div class="contact-form-left">
                <h4 class="details-title">Leave a Message</h4>
                <form id="contact-form" action="#" method="post">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Email here">
                    <textarea name="message" cols="30" rows="10" placeholder="Write here"></textarea>
                    <div class="w-100 fix">
                        <button type="submit" class="default-button submit-btn">SUBMIT</button>
                    </div>
                    <p class="form-messege"></p>
                </form>
            </div>
            <div class="contact-form-right">
                <div class="single-sidebar-widget fix bg-8">
                    <div class="sidebar-contact-info">
                        <h4>Need Any Help?</h4>
                        <p>{{ env('APP_NAME') }} we are always here to help you! Feel free to contact us in any query. </p>
                        <a href="contact.html" class="default-button">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

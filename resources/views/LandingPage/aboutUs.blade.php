@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-area bg-overlay-dark bg-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-text text-left">
                        <h2>ABOUT US</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="index.html">HOME</a></li>
                                <li>ABOUT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs Area End -->
    <!-- About Area Start -->
    <div class="about-three-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="about-text">
                        <h3>We are <span>{{ env('APP_NAME') }}</span></h3>
                        <h2>Your Complete Financial Solutions </h2>
                        <p>{{ env('APP_NAME') }} is bringing something new for your financial problems. You simply need to
                            register new account and complete some simply task and then just collect your rewards</p>
                        <p>Now all you need to do is just simply attach with us. </p>
                    </div>
                    <div class="about-text-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-content">
                                    <h4 class="single-title">Financial Service</h4>
                                    <p>{{ env('APP_NAME') }} is providing 24/7 customer support</p>
                                </div>
                                <div class="single-content">
                                    <h4 class="single-title">Business Analysis</h4>
                                    <p>{{ env('APP_NAME') }} is giving alot of people their daliy rewards with now extera
                                        effort</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-content">
                                    <h4 class="single-title">Best Consutancy</h4>
                                    <p>{{ env('APP_NAME') }} is bring new plan of earning at home</p>
                                </div>
                                <div class="single-content">
                                    <h4 class="single-title">24/7 Support</h4>
                                    <p>You can connect with us at any time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="about-image-container">
                        <img src="{{ asset('assets/img/banner/4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fun-factor-area bg-3 overlay-green pt-100 fix pb-95">
        <div class="container">
            <div class="fun-custom-row">
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/cup.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">750</span></h2>
                        </div>
                        <h4>Cup Of Coffee</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/check.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">350</span></h2>
                        </div>
                        <h4>Case Complete</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/face.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">180</span></h2>
                        </div>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/teams.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">62</span></h2>
                        </div>
                        <h4>Team Member</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/trophy.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">45</span></h2>
                        </div>
                        <h4>Awards Win</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area fix pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-95">
                        <h2>Our Team</h2>
                        <p>{{ env('APP_NAME') }} having a very hardworking team to solve your problems and giving you thier
                            best! </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Robert Williams</a></h3>
                            <span>Chef Executive Officer</span>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/call.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/call-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/facebook.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/facebook-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/twitter.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/twitter-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/google-plus.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/google-plus-hover.png"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Jasmin Jaquline</a></h3>
                            <span>Financial Advisor</span>
                            <p>{{ env('APP_NAME') }} AliBabaSurvey is an investment company, whose team is working on
                                making money from the volatility of cryptocurrencies and offer great returns to our clients.
                            </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/call.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/call-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/facebook.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/facebook-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/twitter.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/twitter-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/google-plus.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/google-plus-hover.png"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Sharlok Homes</a></h3>
                            <span>Chef Executive Officer</span>
                            <p>{{ env('APP_NAME') }} AliBabaSurvey is an investment company, whose team is working on
                                making money from the volatility of cryptocurrencies and offer great returns to our clients.
                            </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/call.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/call-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/facebook.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/facebook-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/twitter.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/twitter-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/google-plus.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/google-plus-hover.png"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Rose Smith</a></h3>
                            <span>Financial Consultant</span>
                            <p>{{ env('APP_NAME') }} AliBabaSurvey is an investment company, whose team is working on
                                making money from the volatility of cryptocurrencies and offer great returns to our clients.
                            </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/call.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/call-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/facebook.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/facebook-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/twitter.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/twitter-hover.png"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img src="img/icons/google-plus.png"
                                                alt=""></a>
                                        <a href="#" class="block s-img"><img src="img/icons/google-plus-hover.png"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

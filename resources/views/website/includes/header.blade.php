<?php
$active ="";
?>


@if(Route::is('website.products') )
    {{$active ="active";}}
@endif
@if(Route::is('website.product_details') )
    {{$active ="active";}}
@endif
@if(Route::is('website.steam_distillation') )
    {{$active ="active";}}
@endif
@if(Route::is('website.partners') )
    {{$active ="active";}}
@endif
@if(Route::is('website.certificates') )
    {{$active ="active";}}
@endif
@if(Route::is('website.gallery') )
    {{$active ="active";}}
@endif
@if(Route::is('website.news') )
    {{$active ="active";}}
@endif
@if(Route::is('website.contact') )
    {{$active ="active";}}
@endif

<!-- ====================Start Header ============================ -->
<header>
    <nav class="navbar navbar-expand-lg  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('website.home') }}">
                <img src="{{ asset('website/images/logo/logo526.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.home') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link -bottom-3
                        @if(Route::is('website.history') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.history') }}">Our Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.products') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.partners') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.partners') }}">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.certificates') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.certificates') }}">Our Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.gallery') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.news') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if(Route::is('website.contact') )
                            {{$active ="active";}}
                        @endif
                        " href="{{ route('website.contact') }}">Contact</a>
                    </li>

            </div>
            <div class="social-icons d-none d-xl-block">
                <a href="#" class="mx-2"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </nav>
</header>
<!-- ====================End Header ============================== -->

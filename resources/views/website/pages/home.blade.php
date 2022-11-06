@extends('layouts.website')
@section('content')

    <!-- ====================Start Home ============================ -->
    <section id="home">
        <div class="video-overlay">
            <div class="home-content text-center">
                <div class="scale-up-center">
                    <h1 class="mb-3">Egyptian Soil And Oil</h1>
                    <p class="mb-4">
                        Awarded the best Egyptian farm for medicinal and fragrant plants ( October 2022 )
                    </p>
                    <a href="{{ route('website.contact')}}" class="btn btn-global py-3 fs-6">Contact Us</a>
                </div>
            </div>
        </div>
        <video loop muted autoplay>
            <source src="{{ asset('website/video/home/home.mp4') }}" type="video/mp4">
        </video>

    </section>
    <!-- ====================End Home ============================== -->
    <!-- ====================Start About ============================ -->
    <section id="about" class="section-seperator">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>
                        ALSHARK farm is 120 hectares located in Beni Suef, Upper Egypt. The city is famous for producing
                        more than 70% of all Egypt herbs and oil. The farm is a family business that started on 2010 by
                        cultivating 120 hectares of desert lands. In 2014, ALSHARK company had the first commercial
                        registry and started selling the herbal products to export companies in the local markets. In
                        2018, ALSHARK company exported herbs of the farm to European market, Germany and Netherland.
                        In 2022, we realized the potential of ALSHARK farm to enter the oil business. Geranium and basil
                        are the two main products in Summer where more than 40 hectares are dedicated for each. In
                        Winter, more than 60 hectares are dedicated for Chamomile (blue), half of which is dried for tea
                        bag exports and the other half for making oil of blue chamomile.
                        Therefore, ALSHARK farm had two delegates in IFEAT Vancouver 2022 and got the opportunity to
                        connect with stakeholders in the F&F industry.
                        contact
                    </p>
                    <a href="{{ route('website.history')}}" class="btn btn-global">SEE MORE</a>

                </div>
                <div class="col-md-6">
                    <div class="youtube-vid">
                        <iframe src="https://www.youtube.com/embed/IeQwQiYyHx8" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================End About ============================== -->
    <!-- ====================Start Services ============================ -->
    <!-- <section id="services">
        Services
    </section> -->
    <!-- ====================End Services ============================== -->

    <!-- ====================Start farm ============================ -->
    <section id="farm" class="section-seperator">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('website/images/gallary/New folder/5.jpg') }}" style="object-fit: cover;" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('website/images/gallary/New folder/6.jpg') }}" style="object-fit: cover;" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('website/images/gallary/New folder/16.jpg') }}" style="object-fit: cover;" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('website/images/gallary/New folder/17.jpg') }}" style="object-fit: cover;" alt=""
                                class="img-fluid">
                        </div>


                    </div>
                </div>
                <div class="col-md-5 mt-5">
                    <div class="container">
                        <h3 class="w-100 mt-3">Farm <br>Locations
                        </h3>
                        <p class="locations mt-4">
                            At our farm locations, their is more than 50 different types of conventional and organic
                            produced by solvent extraction and cold pressed

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================End farm * ============================== -->
    <!-- ====================Start categories ============================ -->
    <!-- <section id="farm">
        categories
    </section> -->
    <!-- ====================End categories ============================== -->


@endsection

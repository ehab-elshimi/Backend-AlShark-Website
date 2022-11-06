@extends('layouts.website')
@section('content')
<section>
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary h6">Our Blog</h5>
            <h2 class="display-20 display-md-18 display-lg-16">Most recent our blog</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-2">
                <article class="card card-style2 mt-2">
                    <div class="card-img">
                        <img class="rounded-top w-100 img-fluid" src="{{ asset('website/images/news/1.jpg') }}" alt="...">
                        <div class="date"><span>27</span>October</div>
                    </div>
                    <div class="card-body">
                        <p class="fs-5">Director of Deutsche Gesellschaft für Internationale Zusammenarbeit (GIZ),
                            Governor of Beni Suef and Governor of Al-Fayoum honored ALSHARK Farm with the award of
                            Best Farm in the First festival of medicinal and fragrant plants held at the Helnan
                            Auberge, Fayoum city.</p>
                    </div>
                    <div class="card-footer pt-3">
                        <p class="text-center text-muted">27/10/2022</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-6 col-md-12 mb-2">
                <article class="card card-style2 mt-2">
                    <div class="card-img">
                        <img class="rounded-top w-100 img-fluid" src="{{ asset('website/images/news/2.jpg') }}" alt="...">
                        <div class="date"><span>27</span>October</div>
                    </div>
                    <div class="card-body">
                        <p class="fs-5">Dr Abdelrahman and Professor Haytham have attended IFEAT Vancouver 2022 as
                            delegates of ALSHARK Farm and got the opportunity to connect with stakeholders of the
                            F&F industry.</p>
                    </div>
                    <div class="card-footer pt-3">
                        <p class="text-center text-muted">9/10/2022</p>
                    </div>
                </article>
            </div>


        </div>
    </div>
</section>



@endsection

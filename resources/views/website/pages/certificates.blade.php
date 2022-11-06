@extends('layouts.website')
@section('content')
    <!-- ====================Start certificates ============================ -->
    <section class="contain certificate mb-5">

        <div class="content">
            <h6>know more about</h6>
            <h1>Our Certificates</h1>
        </div>

    </section>

    <section class="allCertificates py-5">
        <div class="container py-5 text-center">

            <div class="row  ">

                <div class="col-md-3 mb-2">
                    <div class="paper ">
                        <img src="{{ asset('website/images/certificates/fda.jpg') }}" class="img-fluid">
                        <h5 class=" py-2">FDA</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="paper ">
                        <img src="{{ asset('website/images/certificates/iso.jpg') }}" class="img-fluid">
                        <h5 class="py-2">ISO</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="paper">
                        <img src="{{ asset('website/images/certificates/nop.jpg') }}" class="img-fluid">
                        <h5 class="mt-2">NOP Certified</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="paper">
                        <img src="{{ asset('website/images/certificates/organic.jpg') }}" class="img-fluid">
                        <h5 class="mt-2">Organic</h5>
                    </div>
                </div>

            </div>
            <div class="row  secondRow ">
                <div class="col-md-3 mt-4">
                    <div class="paper mt-5">
                        <img src="{{ asset('website/images/certificates/organicCertificate.jpg') }}" class="img-fluid">
                        <h5 class="py-2">Organic Certificate</h5>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="paper mt-5">
                        <img src="{{ asset('website/images/certificates/organicCertificate2.jpg') }}" class="img-fluid">
                        <h5 class="py-2">Organic certificate2</h5>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="paper mt-5">
                        <img src="{{ asset('website/images/certificates/nopCertificate.jpg') }}" class="img-fluid">
                        <h5 class="py-2">NOP Certificate</h5>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="paper mt-5 ">
                        <img src="{{ asset('website/images/certificates/isoCertificate.jpg') }}" class="img-fluid">
                        <h5 class="py-2">ISO Certificate</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="lightBox-container  justify-content-center align-items-center">
        <div class="lightBox-item  d-flex  align-items-center ">
            <i id="close" class=" fas fa-times-circle"></i>
            <i id="prev" class="m-4 fas fa-arrow-circle-left"></i>
            <i id="next" class="m-4 fas fa-arrow-circle-right"></i>
        </div>
    </div>
    <!-- ====================end certificates ============================ -->
@endsection

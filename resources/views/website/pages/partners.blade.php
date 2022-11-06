@extends('layouts.website')
@section('content')
    <!-- start partner -->
    <section class="contain oil mb-5">

        <div class="content">
            <h6>know more about</h6>
            <h1>Partners</h1>
        </div>

    </section>

    <section class="container Machinework py-5">
        <h2 class="my-3 text-center">Our Laboratory</h2>

        <div class="w-100  d-flex py-3">
            <img class="img-fluid w-50  m-auto" src="{{ asset('website/images/partners/MachineWork.webp') }}"
                alt="machine work of naural oil">
        </div>
    </section>

    <section>
        <div class="container labMachine  text-center py-5">
            <h3 class="py-3">Advanced Instruments</h3>


            <div class="row  py-5 text-center d-flex justify-content-between machines">


                <div class="col-md-2">
                    <img class="img-fluid py-2 w-100 " src="{{ asset('website/images/partners/1t.jpg') }}">
                    <h5>Gas chromatography <br>(GC)</h5>
                </div>
                <div class="col-md-2">
                    <img class="img-fluid py-2" src="{{ asset('website/images/partners/t3.jpg') }}">
                    <h5>Refractometer</h5>
                </div>
                <div class="col-md-2">
                    <img class="img-fluid py-2" src="{{ asset('website/images/partners/t2.jpg') }}">
                    <h5>Polarameter</h5>
                </div>

                <div class="col-md-2">
                    <img class="img-fluid py-2" src="{{ asset('website/images/partners/t4.jpg') }}">
                    <h5>Density Meter</h5>
                </div>
                <div class="col-md-2">
                    <img class="img-fluid py-2" src="{{ asset('website/images/partners/t5.jpg') }}">
                    <h5>PH meter</h5>
                </div>


            </div>


        </div>
    </section>
    <!-- end partner -->

@endsection

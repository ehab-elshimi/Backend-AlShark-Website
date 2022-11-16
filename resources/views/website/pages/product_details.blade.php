@extends('layouts.website')
@section('content')
<!-- start product details -->
<div class="product-image-details w-100 position-relative">
    <img src='{{ asset("dashboard/uploads/images/$product->image") }}' class="w-100" alt="">
    <div class="content-prod-details">
        <p>PIMPINELLA ANISIUM
        </p>
        <h4 class="text-light" style="background-color: #fd7e14">{{ $product->name }}
        </h4>
    </div>
</div>
<div class="container pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="desc">
                <h5 class="orange py-3 fs-3">
                    Description
                </h5>
                <p class="lh-lg">
                    {{ $product->desc }}
                </p>
            </div>
            <div class="main-comp">
                <h5 class="orange py-2 fs-3">
                    Main Components
                </h5>
                <p>
                    {{ $product->components }}
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="app">
                <h5 class="orange py-3 fs-3">Application
                </h5>
                <p class="lh-lg">
                    {{ $product->application }}
                </p>
            </div>
            <div class="blends-with">
                <h5 class="orange py-3 fs-3">
                    Blends With
                </h5>
                <p>
                    {{ $product->blends_with }}
                </p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="Cautions">
                <h5 class="orange py-3 fs-3">Cautions</h5>
                <p class="lh-lg">
                    {{ $product->cautions }}
                </p>
            </div>

        </div>
    </div>



</div>


<!--     Packaging Sizes -->
<div class="container prod-details-tabs">
    <ul class="nav  nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                MSDS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                SPECS</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <a href='{{ asset("dashboard/uploads/files/$product->msds") }}' target="_blank" style="text-decoration:none"><i class="fas fa-file-pdf-o text-danger" style="font-size:30px;padding-right:9px;"></i><span class="ml-5">Download MSDS .pdf</span></a>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <a href='{{ asset("dashboard/uploads/files/$product->specs") }}' target="_blank" style="text-decoration:none"><i class="fas fa-file-pdf-o text-danger" style="font-size:30px;padding-right:9px;"></i><span class="ml-5">Download SPECS .pdf</span></a>
        </div>
    </div>

</div>
<!-- end product details -->
@endsection

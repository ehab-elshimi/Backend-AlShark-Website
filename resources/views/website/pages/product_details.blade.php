@extends('layouts.website')
@section('content')
<!-- start product details -->
<div class="product-image-details w-100 position-relative">
    <img src="{{ asset('website/images/anise oil/anise.jpg') }}" class="w-100" alt="">
    <div class="content-prod-details">
        <p>PIMPINELLA ANISIUM
        </p>
        <h4>Anise Oil
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
                    Clear fluid volatile liquid is distilled from seeds / fruits of Pimpinella Anisum Plant, An
                    annual
                    plant belongs to Apiaceae family, Almost colorless to Pale yellow with Sweet aromatic odor.
                    Soluble
                    in Alcohol and fixed oils
                </p>
            </div>
            <div class="main-comp">
                <h5 class="orange py-2 fs-3">
                    Main Components
                </h5>
                <p>
                    Trans-Anethol
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="app">
                <h5 class="orange py-3 fs-3">Application
                </h5>
                <p class="lh-lg">
                    Pharmaceutical industries, Food Additive, Pesticides, Insecticides


                </p>
            </div>
            <div class="blends-with">
                <h5 class="orange py-3 fs-3">
                    Blends With
                </h5>
                <p>
                    Lavender, Peppermint, Orange, Ginger, Clove, and Cinnamon

                </p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="Cautions">
                <h5 class="orange py-3 fs-3">Cautions</h5>
                <p class="lh-lg">Dilute before use; for external use only. May cause skin irritation in some
                    individuals; a skin
                    test is recommended prior to use. Contact with eyes should be avoided, Keep away from children
                    and pets.

                </p>
            </div>
        </div>
    </div>



</div>


<!--     Packaging Sizes -->
<div class="container prod-details-tabs">
    <ul class="nav  nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">MSDS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">SPECS</button>
        </li>






    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">MSDS</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            SPECS</div>




    </div>

</div>
<!-- end product details -->
@endsection

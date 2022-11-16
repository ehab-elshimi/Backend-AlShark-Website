@extends('layouts.website')
@section('content')

    <!-- start products -->
    <div class="products-all mt-5 bg-white">
        <div class="text-center">
            <div class="container">
                <div class="fs-1 text-center mb-5">Categories</div>
                <div class="row g-4 mt-4">
                    <div class=" col-md-4 border rounded-4  shadow-sm mb-2 " style="background-color:rgb(113, 113, 113);padding-bottom: 70px;">
                        <div class="text-center rounded-3 bg-warning text-white fs-3" style="font-size: 18px;">
                            Winter Products
                        </div>
                        @foreach ($winter as $product)
                        <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none d-block mt-4 w-75 m-auto">
                            <div class="prod text-white" style="background-color: #e0743f;">
                                <i class="fa-solid fa-file me-4"></i>
                                {{ $product->name }}
                            </div>
                        </a>
                        @endforeach

                    </div>

                    <div class=" col-md-4 border rounded-4  shadow-sm mb-2 bg-secondary"
                        style="margin-top: -20px;padding-bottom: 70px;">
                        <div class="text-center rounded-3 bg-warning    text-white fs-3" style="font-size: 18px;">
                            Summer Products
                        </div>
                        @foreach ($summar as $product)
                        <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none d-block mt-4 w-75 m-auto">
                            <div class="prod text-white" style="background-color: #e0743f;">
                                <i class="fa-solid fa-file me-4"></i>
                                {{ $product->name }}
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class=" col-md-4 border rounded-4  shadow-sm mb-2" style="background-color:rgb(113, 113, 113);padding-bottom: 70px;">
                        <div class="text-center rounded-3 bg-warning text-white fs-3" style="font-size: 18px;">
                            Cultivated On Demand
                        </div>
                        @foreach ($ondemand as $product)
                        <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none d-block mt-4 w-75 m-auto">
                            <div class="prod text-white" style="background-color: #e0743f;">
                                <i class="fa-solid fa-file me-4"></i>
                                {{ $product->name }}
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
<!-- end products -->
@endsection

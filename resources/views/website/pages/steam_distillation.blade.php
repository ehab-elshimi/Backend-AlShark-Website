@extends('layouts.website')
@section('content')
<!-- start products -->
<div class="products-all">
    <div class="text-center">
        <div class="container mb-8 bg-light">
            <h4>Winter Products</h4>
            <div class="row">
                @foreach ($winter as $product)
                <div class="col-md-6 mb-2">
                    <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none">
                        <div class="prod bg-white">
                            <i class="fa-solid fa-file me-4"></i>
                            {{ $product->name }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        <div class="container mb-8 bg-info">
            <h4>Summar Products</h4>
            <div class="row">
                @foreach ($summar as $product)
                <div class="col-md-6 mb-2">
                    <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none">
                        <div class="prod bg-white">
                            <i class="fa-solid fa-file me-4"></i>
                            {{ $product->name }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        <div class="container mt-4 bg-primary">
            <h4>Ondemand Products</h4>
            <div class="row">
                @foreach ($ondemand as $product)
                <div class="col-md-6 mb-2">
                    <a href="{{ route('website.product_details',$product->id) }}" class="text-decoration-none">
                        <div class="prod bg-white">
                            <i class="fa-solid fa-file me-4"></i>
                            {{ $product->name }}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>


    </div>

</div>

<!-- end products -->
@endsection

@extends('layouts.website')
@section('content')
    <!-- start products -->
    <div class="products-header">
        <div class="video-overlay">
            <div class="home-content text-center prodContent">
                <div class="container">
                    <h3 class="orange fs-1 my-5">Categories</h3>
                    <div class="row">
                        @foreach ($categories as $category)
                        <div class="col-md-6 mb-2">
                            <a href="{{ route('website.steam_distillation',$category->id) }}" class="text-decoration-none">
                                <div class="prod bg-white">
                                    <i class="fa-solid fa-file me-4"></i>
                                    {{ $category->name }}
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>


    </div>

    <!-- end products -->
    {{-- <!-- start products -->
    <div class="products-header">
        <div class="video-overlay">
            <div class="home-content text-center prodContent">
                <div class="container">
                    <h3 class="orange fs-1 my-5">Categories</h3>
                    <div class="row">

                    </div>
                </div>

            </div>
        </div>


    </div> --}}
@endsection

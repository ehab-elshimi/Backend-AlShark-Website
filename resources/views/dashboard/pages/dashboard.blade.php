@extends('layouts.master')
@section('content')
<div class="content">
    <!-- Overview -->
    <div class="row row-deck">

        <div class="col-sm-6 col-xl-3">
            <!-- Messages -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">5</dt>
                        <dd class="text-muted mb-0">Members</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fas fa-users font-size-h3 text-primary mt-n1 ml-n1" style="font-size: 30px;" ></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm font-size-sm" style="background-color: #272E38">
                    <a class="font-w500 d-flex justify-content-end" href="{{ route('team.index') }}" style="text-decoration: none">
                        View All Team
                        <i class="fas fa-arrow-alt-circle-right ml-2 mt-1 font-size-base text-light"></i>
                    </a>
                </div>
            </div>
            <!-- END Messages -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $count_categories }}</dt>
                        <dd class="text-muted mb-0">Categories</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-list-alt text-primary mt-n1 ml-n1" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm font-size-sm" style="background-color: #272E38">
                    <a class="font-w500 d-flex justify-content-end" href="{{ route('categories.index') }}" style="text-decoration: none">
                        View All Categories
                        <i class="fas fa-arrow-alt-circle-right ml-2 mt-1 font-size-base text-light"></i>
                    </a>
                </div>
            </div>
            <!-- END Pending Orders -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- New Customers -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $count_products }}</dt>
                        <dd class="text-muted mb-0">Products</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-product-hunt text-primary mt-n1" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm font-size-sm" style="background-color: #272E38">
                    <a class="font-w500 d-flex justify-content-end" href="{{ route('products.index') }}" style="text-decoration: none">
                        View All Products
                        <i class="fas fa-arrow-alt-circle-right ml-2 mt-1 font-size-base text-light"></i>
                    </a>
                </div>
            </div>
            <!-- END New Customers -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- Conversion Rate -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $count_emails }}</dt>
                        <dd class="text-muted mb-0">Messages</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fas fa-inbox text-primary" aria-hidden="true" style="font-size: 30px;"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm font-size-sm" style="background-color: #272E38">
                    <a class="font-w500 d-flex justify-content-end" href="{{ route('emails.index') }}" style="text-decoration: none">
                        View Inbox
                        <i class="fas fa-arrow-alt-circle-right ml-2 mt-1 font-size-base text-light"></i>
                    </a>
                </div>
            </div>
            <!-- END Conversion Rate-->
        </div>
    </div>
    <!-- END Overview -->
    <div class="block block-rounded block-themed">
        <div class="block-header bg-danger">
            <h3 class="block-title">Company</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="fas fa-user text-light"></i>
                </button>
            </div>
        </div>
        <div class="block-content border border-3 border-danger" style="height: 200px">
            <div class="container">
                <div class="row">
                    <div class="">
                        <p class="text-Danger font-weight-bold">Manager : Salah</p>
                        <p class="text-Danger font-weight-bold">Name : Al Shark</p>
                        <p class="text-Danger font-weight-bold">Phone : 01099644971</p>
                        <p class="text-Danger font-weight-bold">Address : Alexandria, Egypt</p>
                    </div>
                    <div class="">
                        <div class="bg-danger rounded-5 w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

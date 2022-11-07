@extends('layouts.master')
@section('content')
<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded border border-1">
        <div class="block-header" style="position:relative;top:20px;left:20px;">
            <i class='far fa-address-card' style='font-size:30px;position:absolute;top:10px;left:180px;'></i>
            <h5 class="d-inline-block bg-primary" style="position:relative;">Edit Product</h5>
        </div>
        <div class="block-content block-content-full py-5">
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                @csrf
                @method('PUT')
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Session</label>
                    </div>
                    <div class="">
                        <select class="form-control" id="example-select" name="session">
                            <option value="0" selected>Plaint Session</option>
                            <option value="1" {{($product->session === 'winter') ? 'selected' : ''}}>Winter Session</option>
                            <option value="2" {{($product->session === 'summar') ? 'selected' : ''}}>Summar Seeion</option>
                            <option value="3" {{($product->session === 'ondemand') ? 'selected' : ''}}>On Demand</option>
                        </select>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Name</label>
                    </div>
                    <div class="">
                        <input type="text" class="form-control" id="example-text-input" name="name" placeholder="product name" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Image</label>
                    </div>
                    <div class="">
                        <input type="file" class="form-control" id="example-text-input" name="image">
                        <img src="{{ asset("'".public_path('dashboard/uploads/images')."/".$product->image."'") }}" style="width:50px;height:50px;" alt="product image">
                    </div>
                </div>
                <hr>
                <table class="container w-100 mb-3 table table-bordered">
                    <tr>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Description</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" style="width: 100%; height: 100%; border: none" id="example-textarea-input-alt" name="desc" rows="4" placeholder="">{{ $product->desc }}</textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Application</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="application" rows="4" placeholder="">{{ $product->application }}</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Components</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="components" rows="4" placeholder="">{{ $product->components }}</textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Blends<span>&nbsp;With</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="blends_with" rows="4" placeholder="">{{ $product->blends_with }}</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Cautions</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="cautions" rows="4" placeholder="">{{ $product->cautions }}</textarea>
                            </div>
                        </td>
                    </tr>
                </table>




            <table class="table table-bordered">
                <tr>
                    <td class="h6 align-middle">MSDS</td>
                    <td>
                        <input type="text" class="form-control" id="example-text-input" name="msds" placeholder="MSDS Value" value="{{ $product->msds }}">
                    </td>
                    <td class="h6 align-middle">SPECS</td>
                    <td>
                        <input type="file" class="form-control" id="example-text-input" name="specs">
                        <a href="{{ asset("'".public_path('dashboard/uploads/files')."/".$product->specs."'") }}">{{ $product->specs }}</a>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
@endsection

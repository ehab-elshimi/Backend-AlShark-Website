@extends('layouts.master')
@section('content')
<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded border border-1">
        <div class="block-header border border-3 rounded-3 bg-primary text-light " style="position:relative;top:20px;left:18px;width:97%">
            <i class='far fa-address-card' style='font-size:30px;position:absolute;top:10px;left:180px;'></i>
            <h5 class="d-inline-block text-light " style="position:relative;top:4px;">Edit Product</h5>
        </div>
        <div class="block-content block-content-full py-5">
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
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
                <br>
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
                        <div class="container">
                            <div class="row">
                            <div class="col-xl-6 d-flex justify-content-center align-middle pt-2"><a style="text-decoration: none;" href='{{ asset("dashboard/uploads/files/$product->msds") }}'><i class="fa fa-file-pdf-o text-danger" style="font-size:24px;"></i>  {{ $product->specs }}</a></div>
                            <div class="col-xl-6"><input type="file" class="form-control bg-primary" style="width:125px;height:40px;" id="example-text-input" name="msds"></div>
                            </div>
                            </div>
                    </td>
                    <td class="h6 align-middle">SPECS</td>
                    <td>
                        <div class="container">
                        <div class="row">
                        <div class="col-xl-6 d-flex justify-content-center align-middle pt-2"><a style="text-decoration: none;" href='{{ asset("dashboard/uploads/files/$product->specs") }}'><i class="fa fa-file-pdf-o text-danger" style="font-size:24px;"></i>  {{ $product->specs }}</a></div>
                        <div class="col-xl-6"><input type="file" class="form-control bg-primary" id="example-text-input" name="specs" style="width:125px;height:40px;"></div>
                        </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="row py-1">
                <div class="">
                    <label for="example-text-input" class="">Image</label>
                </div>
                <div class="d-flex">
                    <div class="image w-25 h-25" style="margin-left:20%">
                        <img src='{{ asset("dashboard/uploads/images/$product->image") }}' style="width:150px;height:150px" alt="product image">
                    </div>
                    <div>
                        <label class="text-success">Update Image</label>
                        <input type="file" class="form-control border border-success border-3" style="width:125px;height:40px;" id="example-text-input" name="image" placeholder="New Image">
                    </div>
                </div>

                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-icon float-right">
                            <i class="fa fa-fw fa-save"></i>
                        </button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-icon float-right mr-3">
                            <i class="fa fa-arrow-left text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

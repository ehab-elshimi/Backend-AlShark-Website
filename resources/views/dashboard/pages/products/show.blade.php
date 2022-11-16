@extends('layouts.master')
@section('content')
<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded border border-1">
        <div class="block-header" style="position:relative;top:20px;left:20px;">
            <i class='far fa-address-card' style='font-size:30px;position:absolute;top:10px;left:3px;'></i>
            <h5 class="d-inline-block" style="position:relative;left:30px">{{ $product['name'] }}</h5>
        </div>
        <div class="block-content block-content-full py-5">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Session</label>
                    </div>
                    <div class="">
                        <select class="form-control bg-success text-light" id="example-select" readonly>
                            <option value="{{ $product['session'] }}" selected>{{ $product['session'] }}</option>
                        </select>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Name</label>
                    </div>
                    <div class="">
                        <input type="text" class="form-control" id="example-text-input" value="{{ $product['name'] }}" readonly>
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
                                <textarea class="form-control form-control-alt" style="width: 100%; height: 100%; border: none" id="example-textarea-input-alt" rows="4" readonly>{{ $product['cautions'] }}</textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Application</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="4"readonly>{{ $product['application'] }}</textarea>
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
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="4" readonly>{{ $product['components'] }}</textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Blends<span>&nbsp;With</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="4" readonly>{{ $product['blends_with'] }}</textarea>
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
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="4" readonly>{{ $product['cautions'] }}</textarea>
                            </div>
                        </td>
                    </tr>
                </table>




            <table class="table table-bordered">
                <tr>
                    <td class="h6 align-middle">MSDS</td>
                    <td class="text-center align-middle">
                        <?php $link_file1 =  "dashboard/uploads/files/".$product['msds']  ?>
                        <a href="{{ asset($link_file1) }}" target="_blank" style="text-decoration:none"><i class="fa fa-file-pdf-o text-danger" style="font-size:24px;"></i><span class="ml-3">Download MSDS .pdf</span></a>
                    </td>
                    <td class="h6 align-middle">SPECS</td>
                    <td class="text-center align-middle">
                        <?php $link_file2 =  "dashboard/uploads/files/".$product['specs']  ?>
                        <a href="{{ asset($link_file2) }}" target="_blank" style="text-decoration:none"><i class="fa fa-file-pdf-o text-danger" style="font-size:24px;"></i><span class="ml-3">Download SPECS .pdf</span></a>
                    </td>
                </tr>
            </table>
            <div class="row py-1">
                <div class="">
                    <label for="example-text-input" class="">Image</label>
                </div>
                <div class="d-flex">
                    <?php $link =  "dashboard/uploads/images/".$product['image']  ?>
                    <a href="{{ asset($link) }}" class="" download>Download Product Image</a>
                    <div class="image w-25 h-25" style="margin-left:20%">
                        <img src="{{ asset($link) }}" style="width:150px;height:150px" alt="product image">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection


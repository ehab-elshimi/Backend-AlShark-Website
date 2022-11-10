@extends('layouts.master')
@section('content')
<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded border border-1">
        <div class="block-header" style="position:relative;top:20px;left:20px;">
            <i class='far fa-address-card' style='font-size:30px;position:absolute;top:10px;left:180px;'></i>
            <h5 class="d-inline-block" style="position:relative;">New Product</h5>
        </div>
        <div class="block-content block-content-full py-5">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Session</label>
                    </div>
                    <div class="">
                        <select class="form-control bg-success text-light" id="example-select" name="session" required="required">
                            <option value="0" selected>Please Select Plaint Session</option>
                            <option value="1">Winter Session</option>
                            <option value="2">Summar Session</option>
                            <option value="3">On Demand</option>
                        </select>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Name</label>
                    </div>
                    <div class="">
                        <input type="text" class="form-control" id="example-text-input" name="name" placeholder="product name" required>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="">
                        <label for="example-text-input" class="">Image</label>
                    </div>
                    <div class="">
                        <input type="file" class="form-control" id="example-text-input" name="image" required>
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
                                <textarea class="form-control form-control-alt" style="width: 100%; height: 100%; border: none" id="example-textarea-input-alt" name="desc" rows="4" placeholder="" required></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Application</label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="application" rows="4" placeholder="" required></textarea>
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
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="components" rows="4" placeholder="" required></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-1 col-xl-1 d-flex">
                                <label for="example-text-input">Blends<span>&nbsp;With</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="col-lg-11 col-xl-11">
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="blends_with" rows="4" placeholder="" required></textarea>
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
                                <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="cautions" rows="4" placeholder="" required></textarea>
                            </div>
                        </td>
                    </tr>
                </table>




            <table class="table table-bordered">
                <tr>
                    <td class="h6 align-middle">MSDS</td>
                    <td>
                        <input type="file" class="form-control" id="example-text-input" name="msds" required >
                    </td>
                    <td class="h6 align-middle">SPECS</td>
                    <td>
                        <input type="file" class="form-control" id="example-text-input" name="specs" required >
                    </td>
                </tr>
            </table>
            <div class="row float-right w-25 ">
                <input type="submit" class="btn btn-success" id="example-text-input" value="Save">
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.master')
@section('content')
{{-- @dd($rows[0][1]) --}}

    <!-- Page Content -->
    <div class="content">
        <!-- Basic -->
        <div class="float-right">
            <button type="button" class="btn btn-success w-20 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-plus"></i>
                Add Relation
            </button>
            <!-- Modal -->
            <form action="{{ route('categoryproduct.store') }}" method="POST">
                @csrf
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Relation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="example-text-input-valid">Category</label>
                                <select class="form-control bg-success text-light" id="example-select" name="category_id" required="required">
                                    <option value="0" >Please Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input-valid">Product</label>
                                <select class="form-control bg-success text-light" id="example-select" name="product_id" required="required">
                                    <option value="0" >Please Select Product</option>
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="block block-rounded border border-1">
            <div class="block-header" style="position:relative;top:20px;left:20px;">
                <h4 class="">Relations</h4>
            </div>
            <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <!-- Default Table -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr class="table bg-primary text-light">
                                              <th scope="col" style="width:30%;font-weight:bolder;">Category Name</th>
                                              <th scope="col" style="width:40%;font-weight:bolder;">Product Name</th>
                                              <th scope="col" style="width:10%;font-weight:bolder;" class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            @foreach ($rows as $row)
                                            <tr>
                                              <td class="align-middle"><a href="{{ route('categories.showcategory',$row[0])}}" style="text-decoration:none;color:#000;font-weight:bolder;">{{ $row[1] }}</a></td>
                                              <td class="align-middle"><a href="{{ route('products.showproduct',$row[2])}}" style="text-decoration:none;color:#000;font-weight:bolder;">{{ $row[3] }}</a></td>
                                              <td class="text-center">
                                                <div class="btn-group">
                                                    <form method="POST" action="{{ route('categoryproduct.edit',$row[4]) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="GET">
                                                        <button type="submit" class="btn btn-primary btn-icon ml-2">
                                                            <i class="fa fa-fw fa-edit"></i>
                                                        </button>

                                                      </form>
                                                    <form method="POST" action="{{ route('categoryproduct.destroy',$row[4]) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger btn-icon ml-2">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>

                                                      </form>

                                                </div>
                                            </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                </div>
                            </div>
                            <!-- END Default Table -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

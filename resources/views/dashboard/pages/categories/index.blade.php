@extends('layouts.master')
@section('content')
<div style="position: relative;top:10px;left:1057px;">
    <button type="button" class="btn btn-primary w-20 " data-bs-toggle="modal" data-bs-target="#exampleModal">
        + New Category
    </button>
    <!-- Modal -->
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="example-text-input-valid">Name</label>
                        <input type="text" class="form-control" id="example-text-input-valid" name="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input-valid">Description</label>
                        <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="desc" rows="7" placeholder=""></textarea>
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
    <!-- Page Content -->
    <div class="content">
        <!-- Basic -->
        <div class="block block-rounded border border-1">
            <div class="block-header" style="position:relative;top:20px;left:20px;">
                <h4 class="">Categoires</h4>
            </div>
            <div class="block-content block-content-full">
                <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <!-- Default Table -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table">
                                        <thead>
                                            <tr class="table table-info">
                                              <th scope="col" style="width:10%">No.</th>
                                              <th scope="col" style="width:30%">Category Name</th>
                                              <th scope="col" style="width:40%">Description</th>
                                              <th scope="col" style="width:10%" class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($categories as $category)
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>{{ $category->name }}</td>
                                              <td>{{ $category->desc }}</td>
                                              <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-light js-tooltip-enabled px-2 border border-1" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </button>
                                                    <a href="{{ route('categories.destroy',$category->id) }}" class="btn btn-light text-danger js-tooltip-enabled px-2 border border-1 ml-2" data-toggle="tooltip" data-original-title="Remove Client">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
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

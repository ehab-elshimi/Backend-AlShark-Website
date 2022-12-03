@extends('layouts.master')
@section('content')
<div style="position: relative;top:10px;left:1057px;">
    <button type="button" class="btn btn-success w-20 " data-bs-toggle="modal" data-bs-target="#exampleModal">
        + New Category
    </button>
    <!-- Modal -->
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Category</h5>
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
                <button type="submit" class="btn btn-success text-light .addcategory">Save</button>
                </div>
            </div>
            </div>
        </div>
    </form>
</div>
@if (\Session::has('error'))
<div class="alert alert-danger">
    <ul>
        <li>{!! \Session::get('error') !!}</li>
    </ul>
</div>
@endif
    <!-- Page Content -->
    <div class="content">
        <!-- Basic -->
        <div class="block block-rounded border border-1">
            <div class="block-header" style="position:relative;top:20px;left:20px;">
                <h4 class="">Categoires</h4>
            </div>
            <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <!-- Default Table -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr class="table text-light" style="background: #FC0000">
                                              <th scope="col" style="width:35%">Category Name</th>
                                              <th scope="col" style="width:40%">Description</th>
                                              <th scope="col" style="width:20%" class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            @php
                                            $isEmpty = count($categories);
                                            @endphp
                                            @if($isEmpty>0)
                                                @foreach ($categories as $category)
                                                <tr>
                                                <td class="font-weight-bold">{{ $category->name }}</td>
                                                <td class="font-weight-bold">{{ $category->desc }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-success btn-icon">
                                                        <i class="fa fa-fw fa-edit"></i></a>
                                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-icon ml-2" style="background:rgb(181, 4, 4)">
                                                                <i class="fa fa-fw fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="3" class="font-weight-bold">There is no categories</td>
                                                </tr>
                                            @endif
                                          </tbody>
                                      </table>
                                </div>
                            </div>
                            <!-- END Default Table -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
               $("div.alert").remove();
            }, 5000 ); // 5 secs

        });
    </script>

@endsection

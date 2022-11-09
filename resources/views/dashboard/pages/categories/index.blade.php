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
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show js-alert text-center mt-4 mb-n3" role="alert">
    {{ session('status') }}
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
                <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <!-- Default Table -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr class="table bg-info text-light">
                                              <th scope="col" style="width:35%">Category Name</th>
                                              <th scope="col" style="width:40%">Description</th>
                                              <th scope="col" style="width:20%" class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            @foreach ($categories as $category)
                                            <tr>
                                              <td class="font-weight-bold">{{ $category->name }}</td>
                                              <td class="font-weight-bold">{{ $category->desc }}</td>
                                              <td class="text-center">
                                                <div class="btn-group">
                                                      <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-info btn-icon"><i class="fa fa-fw fa-edit"></i></a>
                                                    <form method="POST" action="{{ route('categories.destroy',$category->id) }}">
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
    <script>
          if (document.querySelector('.js-alert')) {
                document.querySelectorAll('.js-alert').forEach(function($el) {
                setTimeout(() => {
                    $el.classList.remove('show');
                }, 7000);
                });
            }
    </script>
@endsection

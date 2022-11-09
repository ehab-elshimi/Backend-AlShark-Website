@extends('layouts.master')
@section('content')
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Edit</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('categories.update',$category->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="row push d-flex justify-content-center">
                    <div class="">
                        <div class="form-group">
                            <label for="example-text-input">category name</label>
                            <input type="text" class="form-control" id="example-text-input" name="name" placeholder="Text Input" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">description</label>
                            <textarea class="form-control" id="example-textarea-input" name="desc" rows="4" placeholder="Textarea content..">{{ $category->desc }}</textarea>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon float-right">
                                    <i class="fa fa-fw fa-save"></i>
                                </button>
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-icon float-right mr-3">
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

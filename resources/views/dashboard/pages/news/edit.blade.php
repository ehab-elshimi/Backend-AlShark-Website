@extends('layouts.master')
@section('content')
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header bg-primary">
            <h3 class="block-title text-light">Edit</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="row push d-flex justify-content-center">
                    <div class="">
                        <div class="form-group">
                            <label for="example-text-input-valid">headline</label>
                            <input type="text" class="form-control" id="example-text-input-valid" name="headline" placeholder="" value="{{ $news->headline }}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input-valid">Description</label>
                            <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="10" name="desc">{{ $news->desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input-valid">Date</label>
                            <input type="date"class="form-control form-control-alt" id="example-textarea-input-alt" name="date" value="{{ $news->date }}">
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="example-text-input" class="">Image</label>
                            </div>
                            <div class="d-flex">
                                <div class="image w-25 h-25" style="margin-left:20%">
                                    <img src='{{ asset("dashboard/uploads/images/$news->image") }}' style="width:150px;height:150px" alt="news image">
                                </div>
                                <div>
                                    <label class="text-success">Update Image</label>
                                    <input type="file" class="form-control border border-success border-3" style="width:125px;height:40px;" id="example-text-input" name="image" placeholder="New Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon float-right">
                                    <i class="fa fa-fw fa-save"></i>
                                </button>
                                <a href="{{ route('news.index') }}" class="btn btn-secondary btn-icon float-right mr-3">
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

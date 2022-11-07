@extends('layouts.master')
@section('content')
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Basic</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{  }}" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            The most often used inputs you know and love
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Text</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Textarea</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

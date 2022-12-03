@extends('layouts.master')
@section('content')
<div>
    <button type="button" class="btn btn-success w-20 float-end mr-7 border border-3 border-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + New News
    </button>
    <!-- Modal -->
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="example-text-input-valid">headline</label>
                        <input type="text" class="form-control" id="example-text-input-valid" name="headline" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input-valid">Description</label>
                        <textarea class="form-control form-control-alt" id="example-textarea-input-alt" rows="10" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input-valid">Image</label>
                        <input type="file" class="form-control form-control-alt" id="example-textarea-input-alt" name="image">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input-valid">Description</label>
                        <input type="date"class="form-control form-control-alt" id="example-textarea-input-alt" name="date">
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
    <div class="content bg-success">
        <!-- Basic -->
        <div class="block block-rounded border border-1">
            <div class="block-header" style="position:relative;top:20px;left:20px;">
                <h4 class="">News</h4>
            </div>
            <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <!-- Default Table -->
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr class="table bg-success text-light">
                                              <th scope="col" style="width:40%">Headline</th>
                                              <th scope="col" style="width:15%">Description</th>
                                              <th scope="col" style="width:15%">Image</th>
                                              <th scope="col" style="width:15%">Date</th>
                                              <th scope="col" style="width:15%"class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            @php
                                            $isEmpty = count($all_news);
                                            @endphp
                                            @if($isEmpty>0)
                                                @foreach ($all_news as $news)
                                                <tr>
                                                <td class="font-weight-bold" style="width:40%">{{ $news->headline }}</td>
                                                <td class="font-weight-bold" style="width:15%;overflow: hiddden;">{{ $news->desc }}</td>
                                                <?php $link =  "dashboard/uploads/images/".$news->image  ?>
                                                <td class="font-weight-bold" style="width:15%"><a href="{{ asset($link) }}" class="" download><img src="{{ asset($link) }}" style="width:150px;height:150px" alt="product image"></td>
                                                <td class="font-weight-bold" style="width:15%">{{ $news->date }}</td>
                                                <td class="text-center" style="width:15%">
                                                    <div class="btn-group">
                                                        <a href="{{ route('news.edit',$news->id) }}" class="btn btn-info btn-icon">
                                                        <i class="fa fa-fw fa-edit"></i></a>
                                                        <form action="{{ route('news.destroy',$news->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-icon ml-2">
                                                                <i class="fa fa-fw fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="font-weight-bold">There is no news</td>
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
@endsection

@extends('layouts.master')
@section('content')
<div class="block block-rounded">
    @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
    <div class="block-header">
        <h3 class="block-title">Dynamic Table <small>Full {{ $count }}</small></h3>
    </div>
    <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th>Plaint Session</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->session }}
                    </td>
                    <td>
                        <a href="{{ route('products.showproduct',$product->id)}}">{{ $product->name }}</a>
                    </td>
                    <td>
                        {{ $product->desc }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-info btn-icon"><i class="fa fa-fw fa-edit"></i></a>
                          <form action="{{ route('products.destroy',$product->id) }}" method="POST">
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
            </tbody>
        </table>
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

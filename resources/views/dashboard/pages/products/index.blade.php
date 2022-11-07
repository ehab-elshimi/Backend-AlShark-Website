@extends('layouts.master')
@section('content')
<div class="block block-rounded">
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
                        <a href="{{ route('products.show',$product->id)}}">{{ $product->name }}</a>
                    </td>
                    <td>
                        {{ $product->desc }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled px-2 border border-1" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <a href="{{ route('categories.destroy',$product->id) }}" class="btn btn-light text-danger js-tooltip-enabled px-2 border border-1 ml-2" data-toggle="tooltip" data-original-title="Remove Client">
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
@endsection

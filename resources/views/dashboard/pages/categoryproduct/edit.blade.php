@extends('layouts.master')
@section('content')
<div class="container ml-9 mt-4">
    <div class="btn btn-secondary">
        <a href="{{ route('categoryproduct.index') }}"><i class="fa fa-arrow-left text-light" aria-hidden="true"></i></a>
    </div>
</div>
<form action="{{ route('categoryproduct.update',$categoryproduct) }}" method="POST">
@csrf
@method('PUT')
<div class="container w-50 pt-5 mt-n3">
<div class="form-group">
    <label for="example-text-input-valid">Category</label>
    <select class="form-control bg-success text-light" id="example-select" name="category_id" required="required">
        <option value="0" >Please Select Category</option>
        @foreach ($categories as $category)
        @if ($category->id == $selected_category['id'])
        <option value="{{ $category->id }}" selected>{{ $selected_category['name'] }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
    </select>
</div>
<div class="form-group pt-2">
    <label for="example-text-input-valid">Product</label>
    <select class="form-control bg-success text-light" id="example-select" name="product_id" required="required">
        <option value="0" >Please Select Product</option>
        @foreach ($products as $product)
        @if ($product->id == $selected_product['id'])
        <option value="{{ $product->id }}" selected>{{ $selected_product['name'] }}</option>
        @else
        <option value="{{ $product->id }} ">{{ $product->name }}</option>
        @endif
        @endforeach
    </select>
</div>
<div class="div pt-5">
    <button type="submit" class="btn btn-primary float-right">Save</button>
</div>
</div>
</form>

@endsection

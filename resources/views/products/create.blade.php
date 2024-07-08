@extends('layout.master')


@section('content')
<h1>Product Form</h1>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control">
    </div>
    <div>
        <label for="price">Product Price</label>
        <input type="number" name="price" id="price" placeholder="Enter Product Price" class="form-control">
    </div>
    <button
        type="submit"
        class="btn btn-success">
        Submit
    </button>

</form>

@endsection

@extends('admin_views.layout.master')

@section('admin_content')
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12 panel-body">

            <table class="table table-striped">
    <thead>
        <tr class="table-dark">

            <th>ID</th>
            <th>Category Title</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td> <img src="{{ $category->img }}" width="100" alt=""> {{ $category->name }}</td>
            <td><a class="btn btn-primary" href="{{ route('category.edit',['id'=>$category->id]) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('category.delete',['id'=>$category->id]) }}">Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>


        </div>
    </div>
</div>



@endsection

@extends('admin_views.layout.master')

@section('admin_content')
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">

            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
    data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true"
    data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
    data-click-to-select="true" data-toolbar="#toolbar">
    <thead>
        <tr>

            <th data-field="id">ID</th>
            <th data-field="name" data-editable="true">Category Title</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>

        @endforeach

    </tbody>
</table>


        </div>
    </div>
</div>



@endsection

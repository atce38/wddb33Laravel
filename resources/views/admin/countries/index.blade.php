@extends('admin_views.layout.master')

@section('admin_content')
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12 panel-body">

            <table class="table tbale-stripped">
    <thead>
        <tr class="table-dark">

            <th >ID</th>
            <th>Category Title</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
        </tr>

        @endforeach

    </tbody>
</table>


        </div>
    </div>
</div>



@endsection

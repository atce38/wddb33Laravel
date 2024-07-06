@extends('layout.master')

@section('content')
<div>
    <h1>Welcome in Products Request Handle from Controller</h1>

    <h2>Name:{{ $name }}</h2>
    <h2>Age:{{ $age }}</h2>

    @if($is_admin)

    <h1>Hello Admin</h1>

    @else

    <h1>Hello User</h1>
    @endif

    @for ($i=0;$i<15;$i++) <h3>Hello {{ $i }}</h3>
        @endfor

        @foreach ($students as $student)
        <h2>Student's Name:{{ $student }}</h2>
        @endforeach

</div>
@endsection



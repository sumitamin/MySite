@extends('Layout.template')
@section('content')
<div class='container'>
    <h1>Welcome to index page</h1>
    @if(count($about_data) > 0)
        <ul class='list-group'>
        @foreach($about_data as $hdata)
            <li class='list-group-item' >{{$hdata}}</li>
        @endforeach
        </ul>
    @endif
</div>
@endsection
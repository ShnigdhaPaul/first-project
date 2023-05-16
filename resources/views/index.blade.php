@extends('layout.main')
@section('title') index page @endsection
@if (session('msg'))
<h1>{{session('msg')}}</h1>
@endif
    

@section('content')

@foreach ($typ as $type )
        <h1>{{$type-> name}}: {{$type-> price}}</h1>  
        @endforeach

@endsection


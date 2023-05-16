@extends('layout.main')
@section('title') Create Page @endsection



@section('content')


<form action="{{route('typ.store')}}" method="post">
    @csrf
    <input type="text" name="name">
    @error('name') <h5> {{$message }}</h5>
        
    @enderror
    <input type="submit" value="Save">
</form>
@endsection
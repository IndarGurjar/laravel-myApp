@extends('layout.master')
@section('test')
    <h1>Post Page:</h1>
@stop

@section('sidebar')
    @parent
    <p>this is appended to the master file </p>
@endsection

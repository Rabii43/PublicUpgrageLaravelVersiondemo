@extends('layouts.app')

@section('content')
@include('categories.form', ['category' => $category])
@endsection
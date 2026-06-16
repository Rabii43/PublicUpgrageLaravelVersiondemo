@extends('layouts.app')

@section('content')
@include('products.form', ['product' => $product])
@endsection
@extends('layouts.app')
@section('content')
<div class="container text-center products-container">
	@foreach($products as $product)
	@include("products.product", ["product"=>$product])
	@endforeach
</div>
@endsection
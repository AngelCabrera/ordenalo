@extends('layouts.app1')
@section('content')
<div class="container text-center login">
	@include("products.product", ["product"=>$product])
</div>
@endsection
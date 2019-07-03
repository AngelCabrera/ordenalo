@extends('layouts.app')
@section ('content')

	
	<div class="container">
		<h1>Laravel 5 Autocomplete using Bootstrap Typehead JS</h1> <input type="text" class="typehead form-control" placeholder="Autocomplete">
	</div>

@endsection
<script type="text/javascript">
	var path = "{{ route('autocomplete') }}";
	$('input.typehead').typehead({
		source: function (query, process){ 
				return $.get(path, {query:query}, function(data){ return process(data);
				});
		}
	});
</script>

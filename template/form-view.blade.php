@extends('layout.app', ["current" => $current])

@section('body')

<html>
	<head>
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <title>{{$title}}</title>
	    <meta name="csrf-token" content="{{ csrf_token() }}">
		<style>
			body { padding: 20px; }
		</style>
	</head>
	<body>
	  	<main role="main">
	    	<div class="row">
	      		<div class="container  col-sm-12">
	        		<div class="card border">
	          			<div class="card-header">
	            			<h5 class="card-title">{{$headerTitle}}</h5> 
	          			</div>
	          			<div class="card-body">
	            			<form action="{{$actionForm}}" method="POST">
								<main role="main">
									@hasSection('form-view')
										@yield('form-view')
									@endif
								</main>
	            			</form>
	          			</div>          
	{{-- 3) --}}
	@if ($errors->any())          
	          			<div class="card-footer">
	@foreach ($errors->all() as $error)
	        				<div class="alert alert-danger" role="alert">
	{{ $error }}
	        				</div>
	    @endforeach
	    				</div>
	@endif          
					</div>
	      		</div>
	    	</div>
	  	</main>
		<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
	</body>
</html>

@endsection
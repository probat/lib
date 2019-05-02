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
	        			<div class="card-body">
	          				<div class="card-header">
	            				<h5 class="card-title">{{$headerTitle}}</h5> 
	          				</div>
	          				<table class="table table-ordered table-hover" id="{{$table['id']}}">
								@hasSection('grid')
									@yield('grid')	
								@endif
								<thead>
									<tr>
										@foreach($head as $col)
										<th>{{$col}}</th>
										@endforeach
									</tr>
								</thead>
								<tbody>
									@foreach($rows as $row)
										<tr>
											<td>{{$row->id}}</td>
											<td>{{$row->nome}}</td>
											<td>
												<a href="{{$actionEdit['href']}}{{$row->id}}" class="btn btn-sm btn-primary">{{$actionEdit['label']}}</a>
												<a href="{{$actionCancel['href']}}{{$row->id}}" class="btn btn-sm btn-danger">{{$actionCancel['label']}}</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<div class="card-footer">
								<a href="{{$actionForm}}/novo" class="btn btn-sm btn-primary" role="button" {{$event}}> Nova Categoria</a>
							</div>
						</div>
						@hasSection('javascript')
							@yield('javascript')	
						@endif
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
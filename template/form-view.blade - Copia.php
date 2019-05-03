<html>
	<head>
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <title>Pagina de Clientes</title>
	    <meta name="csrf-token" content="{{ csrf_token() }}">
		<style>
			body { padding: 20px; }
		</style>
	</head>
	<body>
	  	<main role="main">
	    	<div class="row">
	      		<div class="container  col-sm-8 offset-md-2">
	        		<div class="card border">
	          			<div class="card-header">
	            			<h5 class="card-title">Cadastro de Cliente</h5> 
	          			</div>
	          			<div class="card-body">
	            			<form action="/cliente" method="POST">
	              				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	              				<div class="form-group">
	                				<label for="nome">Nome do Cliente</label>
	                					<input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome"  id="nome" placeholder="Nome do Cliente">
	@if ($errors->has('nome'))
	                    				<div class="invalid-feedback">
		{{$errors->first('nome')}}
	                    				</div>
	@endif
	              				</div>
	              				<div class="form-group">
	                				<label for="idade">Idade do Cliente</label>
	                				<input type="number" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade"  id="idade" placeholder="Idade do Cliente">
	@if ($errors->has('idade'))
	                    			<div class="invalid-feedback">
	{{$errors->first('idade')}}
	                    			</div>
	@endif
	              				</div>
	               				<div class="form-group">
	                				<label for="endereco">Endereço</label>
	                				<input type="text" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco"  id="endereco" placeholder="Endereço">
	@if ($errors->has('endereco'))
	                    			<div class="invalid-feedback">
	{{$errors->first('endereco')}}
	                    			</div>
	@endif
	              				</div>
	              				<div class="form-group {{$errors->has('email') ? 'is-invalid' : ''}}">
	                				<label for="email">Email</label>
	                				<input type="text" class="form-control" name="email"  id="email" placeholder="E-mail do Cliente">
	@if ($errors->has('email'))
	                    			<div class="invalid-feedback">
	{{$errors->first('email')}}
	                    			</div>
	@endif
	              				</div>
	              				<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
	              				<button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
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


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
		<title>Cadastro de Produtos</title>
		<meta name="csrf-token" content="{{ csrf_token() }}"></meta>
		<style type="text/css">
			body{
				padding: 20px;

				min-height: 100%;
    		    display: flex;
    		    flex-direction: column;
			}
			.navbar {
				margin-bottom: 20px;
			}
			html {
    		    height: 100%;
    		}
    		/*body {
    		  min-height: 100%;
    		  display: flex;
    		  flex-direction: column;
    		}*/
    		.content {
    		    flex: 1;
    		}
    		.page-footer{
    			background-color: gray
    		}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="container">
				@component('componente_navbar', ["current" => $current])
				@endcomponent
				<main role="main">
					@hasSection('body')
						@yield('body')
					@endif
				</main>
			</div>
			<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
			@hasSection('javascript')
        		@yield('javascript')
    		@endif
    	</div>
		<footer class="page-footer font-small blue">
  			<div class="text-center py-3">© 2018 Copyright:
    			<a href="https://www.google.com.br/"> Teste</a>
  			</div>
		</footer>
	</body>
<html>
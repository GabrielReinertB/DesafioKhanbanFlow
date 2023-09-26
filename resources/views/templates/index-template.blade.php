<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		{{-- <link rel="icon" href="{{ asset('favicon.svg') }}" sizes="any" type="image/svg+xml"> --}}
		<link rel="stylesheet" href="{{ asset('css/index-all.css') }}">
		@stack('styles')

		<title>KhanbanFlow</title>
	</head>

	<body>
		<nav>
			<div>
				<a title="Anything in Time" href="{{ route('users.home') }}">
					<img style="height: 50px; margin:5px;" src="{{ asset('images/logo-kanban-flow.png')}}"></img>
					KhanbanFlow
				</a>
			</div>
			
			<div>
				<a href="#">Minha conta</a>
				<a href="{{ route('auth.logout') }}">Sair</a>
				<a href="{{ route('users.create') }}" class="btn white">Perfil</a>
				<svg class="svg-blue" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg>
			</div>
		</nav>	

		<main>
			@yield('conteudo')
		</main>

		<footer>
			<p>Todos os direitos reservados: <a href="https://github.com/GabrielReinertB">github.com/GabrielReinertB</a><small>©</small> - {{ now()->year }}</p>
		</footer>
	</body>
</html>
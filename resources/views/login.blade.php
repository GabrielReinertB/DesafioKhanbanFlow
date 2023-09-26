<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ asset('css/root.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">

	<title>Login - KhanbanFlow</title>
</head>
<body>
	<main>
		<div class="card">
			<center><span><img src="{{ asset('images/logo-kanban-flow.png')}}"></span></center>
			<h2>Faça login para acessar o sistema</h2>

			<form action="{{ route('auth.login') }}" method="POST">
				@csrf
				<fieldset>
					<div class="in-group email">
						<label>Email</label>
						<input type="email" name="email" class="in">
					</div>
				
					<div class="in-group senha">
						<label>Senha</label>
						<input type="password" name="senha" class="in">
					</div>

					<div class="in-group entrar">
						<input type="submit" value="Entrar" class="btn">
					</div>
				</fieldset>
			</form>
			
			<blockquote>
				<center><p><a href="#" style="color: black">Esqueceu sua senha?</a></p></center>
			</blockquote>
		</div>

		<blockquote>
			<p>Ainda não tem cadastro? <a href="{{ route('users.create') }}">Clique aqui!</a></p>
		</blockquote>
	</main>	
</body>
</html>

	
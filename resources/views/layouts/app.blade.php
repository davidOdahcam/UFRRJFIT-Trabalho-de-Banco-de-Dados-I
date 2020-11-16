<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<title>UFRRJFIT</title>
	@stack('css')
</head>
<body>
	<header class="header bg-dark">
		<div class="container">	
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="{{ route('home') }}"><h1>UFRRJ<span class="text-success">FIT</span></h1></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link @stack('home')" href="{{ route('home') }}">Início</a>
						<a class="nav-item nav-link @stack('alunos')" href="{{ route('alunos.index') }}">Alunos</a>
						<a class="nav-item nav-link @stack('instrutores')" href="{{ route('instrutores.index') }}">Instrutores</a>
					</div>
				</div>
			</nav>
		</div>
	</header>
		
    <main class="container">	
		<div class="content">
			@yield('content')
		</div>
	</main>
	
	<footer class="footer py-4 bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="text-light">
						<h5>Trabalho de Banco de Dados 1</h5>
						<h6>Membros:</h6>
						<ul class="membros text-light">
							<li>David dos Santos Machado - 20190022328</li>
							<li>Pedro Raposo Felix de Sousa - 20190004642</li>
							<li>Victor de Oliveira Martins Azevedo - 20190018746</li>
						</ul>
					</div>
				</div>
				
				<div class="col-12 col-md-6">
					<img src="image/ufrrj-ft.svg" class="img-fluid float-none float-md-right">
				</div>
			</div>
		</div>
	</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
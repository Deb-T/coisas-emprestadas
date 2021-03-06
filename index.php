<!DOCTYPE html>
<html>
<head>
	<title> Coisas Emprestadas - Página Inicial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<div class="header">
  		<h1> Coisas Emprestadas </h1>
	</div>
	<div>
		<p> Seja bem-vindo! <br/></p>

		<p> Novo usuário? Clique <a href="cadastro.php">aqui</a> para se cadastrar! <br/></p>

		<?php
			if(isset($_GET['erro'])){
				echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
			}
				
			if(isset($_GET['autentica'])){
				echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
			}
			
		?>

		<form action="login.php" method="post">
			<label for="login"> Usuário </label>
			<input type="email" name="login" id="login" placeholder="Email cadastrado" /> 
			<label for="senha" name="senha"> Senha </label>
			<input type="password" name="senha" id="senha" placeholder="Senha cadastrada" /> 
			<input type="submit" value="Entrar" >
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
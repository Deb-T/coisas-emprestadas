<!DOCTYPE html>
<html>
<head>
	<title> Perfil </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<header style="position: sticky; top: 0;">
		<h2 style="text-align: center;"> Meu Perfil </h2>
	</header>
	
	<div class="main">	
		<main>
			<form method="post" style="position" >
				<table>
					<tr>
						<td><label for="nome"> Nome </label></td>
						<td><input type="text" name="nome" /></td>
					</tr>
					<tr>
						<td><label for="email"> Email </label></td>
						<td><input type="email" name="email" /></td>
					</tr>
					<tr>
						<td><label for="fone"> Fone </label></td>
						<td><input type="text" name="fone" /></td>
					</tr>
					<tr>
						<td><label for="local"> Local </label></td>
						<td><input type="text" name="local" /></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Editar</button></td>
					</tr>
				</table>
			</form>
		</main>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
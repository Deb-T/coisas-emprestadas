<?php 

	include "includes/autentica.php"; 

	if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
		$id = $_SESSION['id'];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$sucesso = null;
	
		include "includes/conecta.php";
		
		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = $id;";
		$res = mysqli_query($conn, $sql);
		
		if ($res) {
			$sucesso = true;
			$_SESSION['nome'] = $nome;
			$_SESSION['email'] = $email;

			header("Location: inicio.php");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Perfil </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<h2 style="text-align: center;"> Meu Perfil </h2>
</div>
	
	<div class="main">	
		<main>
			<form action="perfil.php" method="post" style="position" >
				<table>
					<tr>
						<td><label for="nome"> Nome </label></td>
						<td><input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" /></td>
					</tr>
					<tr>
						<td><label for="email"> Email </label></td>
						<td><input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" /></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">SALVAR</button></td>
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
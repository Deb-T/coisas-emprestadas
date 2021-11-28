<!DOCTYPE html>
<html>
<head>
	<title> Início </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="header">
  		<h1>Seja bem-vindo<br/></h1>
	</div>

	<div class="column left">
			<ul>
				<li> Nome </li>
				<li> Email </li>
				<li> Fone </li>
				<li> Local </li>
			</ul>
			<a href="perfil.php"><button> Editar meu perfil </button></a>
			<a href="logout.php"><button> Sair </button></a>
	</div>

	<!-- Lista de itens -->
	<div class="column right">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col"> Item </th>
					<th scope="col"> Descrição </th>
					<th scope="col"> Status </th>
				</tr>
			</thead>
			<tbody>	
			<tr>
				<th scope="row"> Barraca de camping </th>
				<td> Barraca tamanho casal na cor verde para camping. Completa, fácil de montar, sem defeitos.</td>
				<td> Indisponível </td>
				<td> </td>
			</tr>
			<tr>
				<th scope="row"> Livro Dom Casmurro </th>
				<td> Livro sem rasuras, apenas marcas causadas pelo manuseio. </td>
				<td> Indisponível </td>
			</tr>
			<tr>
				<th scope="row"> Churrasqueira portátil </th>
				<td> Churrasqueira de mesa, pequena (30x80), fácil de carregar. </td>
				<td> Disponível </td>
			</tr>
			<tr>
				<th scope="row"> Piscina 5000L </th>
				<td> Piscina de 5000L sem defeitos. Acompanha bomba de ar para encher as laterais. </td>
				<td> Indisponível </td>
			</tr>
		</tbody>
		</table>

		<!-- Cadastrando novo item -->
		<h5><br/> Cadastrar novos itens <br/></h5>
		<form>
			<table><br/>
				<tr>
					<td><label for="item"> Item </label><td>
					<td><input type="text" name="item" /></td>
				</tr>
				<tr>
					<td><label for="descricao"> Descrição </label></td>
					<td colspan="2"><input type="text" name="descricao" /></td>
				</tr>
				<tr>
					<td><input type="submit" value="Cadastrar Item"></td>
				</tr>
			</table>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
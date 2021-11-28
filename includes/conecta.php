<?php

	$conn = mysqli_connect("localhost", "root", "", "coisas-emprestadas");
	if($conn == false){
		die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error());
	}
	
?>
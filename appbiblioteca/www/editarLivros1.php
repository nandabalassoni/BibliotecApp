<?php

include 'bd.php';

	$idlivro = $_POST['idlivro'];
	$titulo= $_POST['titulo'];
	$genero= $_POST['genero'];
	$autor= $_POST['autor'];

    $update_query="UPDATE livros SET titulo='$titulo', genero='$genero', autor='$autor' WHERE idlivro='$idlivro'";
	$update_result= mysqli_query($con, $update_query);

	if($update_result)
		echo "<script> location.href='livros.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível editar usuário. Por favor, tente novamente.');location.href='livros.php?p=inicial';
			</script>";
?>
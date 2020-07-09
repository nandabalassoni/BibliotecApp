<?php

include 'bd.php';

	$idaluno = $_POST['idaluno'];
	$nome= $_POST['nome'];
	$ra= $_POST['ra'];
	$cpf= $_POST['cpf'];

    $update_query="UPDATE aluno SET nome='$nome', ra='$ra', cpf='$cpf' WHERE idaluno='$idaluno'";
	$update_result= mysqli_query($con, $update_query);

	if($update_result)
		echo "<script> location.href='aluno.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível editar usuário. Por favor, tente novamente.');location.href='livros.php?p=inicial';
			</script>";
?>
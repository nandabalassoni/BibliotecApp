<?php

include 'bd.php';

	$idfuncionario = $_POST['idfuncionario'];
	$nome= $_POST['nome'];
	$cpf= $_POST['cpf'];

    $update_query="UPDATE funcionario SET nomeFuncionario='$nome', cpf='$cpf'WHERE idfuncionario='$idfuncionario'";
	$update_result= mysqli_query($con, $update_query);

	if($update_result)
		echo "<script> location.href='funcionario.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível editar usuário. Por favor, tente novamente.');location.href='funcionario.php?p=inicial';
			</script>";
?>
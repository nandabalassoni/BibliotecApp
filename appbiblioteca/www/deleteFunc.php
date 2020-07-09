<?php

	include 'bd.php';

	$idfuncionario = $_GET['idfuncionario'];

	$delete_query="DELETE FROM funcionario WHERE idfuncionario ='$idfuncionario'";

	$result_delete=(mysqli_query($con, $delete_query));

	if($result_delete)
		echo "<script> location.href='funcionario.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível deletar usuário.');location.href='funcionario.php?p=inicial';
			</script>";

?>

<?php

	include 'bd.php';

	$idaluno = $_GET['idaluno'];

	$delete_query="DELETE FROM aluno WHERE idaluno ='$idaluno'";

	$result_delete=(mysqli_query($con, $delete_query));

	if($result_delete)
		echo "<script> location.href='aluno.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível deletar usuário.');location.href='aluno.php?p=inicial';
			</script>";

?>

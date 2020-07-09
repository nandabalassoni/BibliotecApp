<?php 

	include 'bd.php';

	
	$idlivro = $_GET['idlivro'];

	$delete_query="DELETE FROM livros WHERE idlivro ='$idlivro'";

	$result_delete=(mysqli_query($con, $delete_query));

	if($result_delete)
		echo "<script> location.href='livros.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível deletar usuário.');location.href='livros.php?p=inicial';
			</script>";
?>
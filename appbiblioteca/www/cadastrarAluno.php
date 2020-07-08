<?php
    include 'bd.php';
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    
    $query_usuario = "INSERT INTO aluno (nome, ra, cpf) VALUES ('$nome', '$ra', '$cpf')";
    mysqli_query($con, $query_usuario);
    
    if(mysqli_insert_id($con)){
        echo true;
    }else{
        echo false;
    }

    //mysqli_close($con);

    header("Location:/BibliotecApp/appbiblioteca/www/aluno.php");
?>

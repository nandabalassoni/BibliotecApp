<?php
    include 'bd.php';
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    
    $query_usuario = "INSERT INTO funcionario (nomeFuncionario, cpf) VALUES ('$nome', '$cpf')";
    mysqli_query($con, $query_usuario);
    
    if(mysqli_insert_id($con)){
        echo true;
    }else{
        echo false;
    }

    //mysqli_close($con);

    header("Location:/BibliotecApp/appbiblioteca/www/funcionario.php");
?>

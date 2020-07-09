<?php
    include 'bd.php';
    
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
    
    $query_usuario = "INSERT INTO livros (titulo, genero, autor) VALUES ('$titulo', '$genero', '$autor')";
    mysqli_query($con, $query_usuario);
    
    if(mysqli_insert_id($con)){
        echo true;
    }else{
        echo false;
    }

    //mysqli_close($con);

    header("Location:/BibliotecApp/appbiblioteca/www/livros.php");
?>

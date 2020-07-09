<?php
	include 'bd.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Biblioteca</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="topo">
                    <h1>BibliotecApp</h1>
                    <p> Sua biblioteca virtual</p>
                </div>
            </div>

            <div class="row" id="navbar">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="aluno.php">Alunos</a>
                            <a class="nav-item nav-link" href="livros.php">Livros</a>
                            <a class="nav-item nav-link" href="funcionario.php">Funcionários</a>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>

            <div class="row" id="dadosAlunos">
                <div class="col-md-12">
                    <h1> Editar Funcionários </h1>
                </div>
            </div>

            <?php
                $query_select="SELECT * FROM funcionario";
				$query_result=(mysqli_query($con, $query_select));

				// print_r($select_result);exit;

				if(mysqli_query($con, $query_select)) :
				foreach($query_result as $funcionario) :
            ?>
                    
            <div class="formulario">
			    <form action="editarFunc1.php" method="post" id="editar">
                    <input type="hidden" name="idfuncionario" value="<?php echo ($funcionario['idfuncionario']); ?>">
                    <label> Nome Funcionário: </label>
					<input type="text" name="nome" placeholder="Nome" value="<?php echo ($funcionario['nomeFuncionario']); ?>">
					<br><br>
					<label> CPF: </label>
					<input type="text" name="cpf" placeholder="CPF" value="<?php echo ($funcionario['cpf']); ?>" >
					<br><br>
					<input type="submit" value="Salvar">
					<!-- <button><a href="delete.php"> Limpar dados </a></button> -->
				</form>
				<?php endforeach; ?>
				<?php endif; ?>
            </div>
            
            <div class="row">
                <div class="col-md-12" id="voltarEditar">
                    <a href="funcionario.php"><button type="button" class="btn btn-outline-danger btn-lg btn-block" id="button">voltar</button></a>
                </div>
            </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            
    </body>
</html>
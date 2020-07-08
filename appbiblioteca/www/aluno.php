<?php
	session_start();
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
                    <h1> Alunos </h1>
                </div>
            </div>

            <div class="row" id="tabela">
                <div class="col-md-12">
                    <table class="table-responsive" border="1"> 
                        <tr>
                            <th> IdAluno </th>
                            <th> Nome </th>
                            <th> RA </th>
                            <th> CPF </th>
                            <th> Mais </th>
                        </tr>
                        <tbody>

                            <?php
                                $select_query="SELECT * FROM aluno";
                                $select_result=(mysqli_query($con, $select_query));
    
                                // print_r($select_result);exit;
    
                                if(mysqli_query($con, $select_query)) {
                                    foreach($select_result as $aluno) : ?>
    
                                     
                                    <tr>
                                        <td><?php echo($aluno['idaluno']); ?></td>
                                        <td><?php echo($aluno['nome']); ?></td>
                                        <td><?php echo($aluno['ra']); ?></td>				
                                        <td><?php echo($aluno['cpf']); ?></td>
                                    </tr>	
                                    <?php endforeach; ?>				
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="voltar">
                    <a href="home.html"><button type="button" class="btn btn-outline-danger btn-lg btn-block" id="button">voltar</button></a>
                    <a href="#"><button type="button" class="btn btn-outline-danger btn-lg btn-block" id="cadastrar" data-toggle="modal" data-target="#cadastroAlunoModal">novo</button></a>
                </div>
            </div>

            <!-- Cadastro Modal -->

            <div class="modal fade" id="cadastroAlunoModal" tabindex="-1" role="dialog" aria-labelledby="cadastroAlunoModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cadastroAlunoModalLabel">Cadastrar novo aluno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="bd.php" method="post" id="cadastro">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome do aluno" name="nome" required />
                                </div>
                                <div class="form-group">
                                    <label for="recipient-ra" class="col-form-label">RA</label>
                                    <input type="text" class="form-control"  placeholder="RA do aluno" name="ra" required />
                                </div>
                                <div class="form-group">
                                    <label for="recipient-cpf" class="col-form-label">CPF</label>
                                    <input type="text" class="form-control"  placeholder="CPF do aluno" name="cpf" required />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <!--button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button-->
                            <input type="submit" value ="Enviar" class="btn btn-primary" data-dismiss="modal"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
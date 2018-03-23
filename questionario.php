<?php
$cadastro_nome          = (string)$_POST['cadastro_nome'];


?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Questionário</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
    </head>

    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand"><?php echo 'Olá ' . $cadastro_nome?></h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li><a href="index_prova.php">Home</a></li>
                                    <li><a href="#">Sobre</a></li>
                                    <li><a href="#">Contatos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover">
                        <h1 class="cover-heading">Campo para inserir a pergunta</h1>
                        <p class="lead">Aqui será o espaço para o radio box para as repostas</p>
                    </div>


                </div>
            </div>
        </div>

    </body>
</html>

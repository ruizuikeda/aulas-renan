<?php
session_start();
require_once 'include/db.php';
require_once 'include/phpLib_questionarios.php';
$cadastro_nome          = (string)$_SESSION['cadastro_nome'];







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
                            <h3 class="masthead-brand"></h3>
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
                        <h1 class="cover-heading">Parabéns! Você acertou: </h1>
                        <p class="lead">Aqui era mostrar quantas perguntas ele acertou</p>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>Feito Por:  <a href="http://getbootstrap.com">Renan Nóbrega</a>, by <a href="https://twitter.com/mdo">Graphis Design</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
session_start();

?>
<html lang="pt">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Login</title>

    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <div class="row" class="col-md-12">
                    <p class="bg-primary"><div class="col-md-9"><h3> <?php echo 'Bem vindo Sr.(a) '.$_SESSION["logado_nome"].' '.$_SESSION['logado_sobrenome']; ?></h3></div></p>
            </div>
        </div>
        </div>
    </body>
</html>

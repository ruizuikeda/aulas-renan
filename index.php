<?php
$ocorrencia = $_GET["msg"];
switch ($ocorrencia){
    case 1:
        echo ' <div class="col-md-12">
              <div class="col-md-6"><p class="bg-danger">Digite seu Login</p>
             </div>
        </div>';

        break;
    case 2:
        echo ' <div class="col-md-12">
              <div class="col-md-6"><p class="bg-danger">Digite sua senha</p>
             </div>
        </div>';
        break;
    case 3:
        echo ' <div class="col-md-12">
              <div class="col-md-6"><p class="bg-danger">Usuário ou senha incorreta</p>
             </div>
        </div>';
        break;

}
?>

<div class="col-md-12"> <div class="col-md-6"></div></div>


<html lang="pt">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Login</title>

    </head>
    <body>
        <div class="container clearfix col-md-3">
            <form action="action/validar.php" method="post" class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Login</label>
                        <input type="text"  name = "login" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password"  name = "senha" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="cadastro.php" class="btn btn-default" role="button">Cadastrar-se</a>

                </div>
                </div>
            </form>
    </body>
</html>


<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Cadastro do Participante</title>
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
                            <h3 class="masthead-brand">Prova</h3>
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
                        <h1 class="cover-heading">Primeiro, preencha com seus dados: </h1>
                    </div>
                        <form action="questionario.php" method="post" class="form-vertical col-md-12">
                            <div class="form-group col-md-4">
                                <label class="col-md-12">Nome Completo</label>
                                <input type="text" class="form-control" name="cadastro_nome" placeholder="Digite o Nome">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="col-md-12">Setor</label>
                                <input type="text" class="form-control" name="cadastro_rg" placeholder="Digite seu RG">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="col-md-12">Cargo</label>
                                <input type="text" class="form-control" name="cadastro_cpf" placeholder="Digite seu CPF">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg" align="center">Cadastrar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>

    </body>
</html>

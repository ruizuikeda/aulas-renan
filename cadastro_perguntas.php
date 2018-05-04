
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Bem vindo</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
    </head>

    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">Questionário Nº:</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Sobre</a></li>
                                    <li><a href="#">Acesso ADM</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover">
                        <form action="action/inserir_cadastro_aluno.php" method="post" class="form-vertical col-md-12">
                            <input type="hidden" name="id" value= "<?php echo $id?>">
                            <div class="form-group col-md-12">
                                <label class="col-md-10">Digite a pergunta 1</label>
                                <input type="text" class="form-control" value="<?php echo $nome?>"name="cadastro_nome" placeholder="Digite o Nome">
                            </div>



                        </form>
<!--                        <h1 class="cover-heading">Cadastrar Perguntas</h1>-->
<!--                        <p class="lead"></p>-->
<!--                        <p class="lead">-->
<!--                            <a href="cad_participante.php" class="btn btn-lg btn-default">Iniciar Teste</a>-->
<!--                        </p>-->
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

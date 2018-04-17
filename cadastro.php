<?php

?>
<html lang="pt">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Cadastro</title>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alternar de navegação</font></font></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Graphis Animes</font></font></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spoilers</font></font></a></li>
                        <li><a href="#about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre</font></font></a></li>
                        <li><a href="#contact"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contato</font></font></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastros </font></font><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cadastro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastros de Usuários</font></font></a></li>
                                <li><a href="cad_anime.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastros de Animes</font></font></a></li>
                                <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qualquer coisa</font></font></a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Texto sem link</font></font></li>


                            </ul>
                        </li>
                    </ul>
                </div>
                <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
                <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
                <script type="text/javascrip">
                        $('.dropdown-toggle').click(function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                        });
                        $('.dropdown-menu').click(function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                        });
                        $(document).ready(function () {
                        $('.dropdown-toggle').dropdown();
                        });
                </script>
            </div>
        </nav>
        <div class="page-header">
           <div class= "row">
               <div class="col-md-12 text-center">
                <div class="jumbotron">
                <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tela de Cadastro</font></font></h1>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uma página de teste para executar oque foi aprendido até agora. </font><font style="vertical-align: inherit;">Objetivo é criar uma tela simples e funcional usando PHP e Bootstrap.</font></font></p>
                </div>
               </div>
            </div>
        </div>
        <form action="action/inserir_cadastro.php" method="post" class="form-horizontal col-md-6">
            <div class="form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">Nome</label>
                <input type="text" class="form-control" name="cadastro_nome" placeholder="Digite seu nome">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Sobrenome</label>
                <input type="text" class="form-control" name="cadastro_sobrenome" placeholder="Digite seu Sobrenome">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">Login</label>
                <input type="text" class="form-control" name="cadastro_login" placeholder="Seu Login">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Senha</label>
                <input type="password" class="form-control" name="cadastro_senha" placeholder="Digite uma Senha">
            </div>


            <div class= "form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">CPF</label>
                <input type="text" class="form-control" name="cadastro_cpf" placeholder="CPF">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Endereço</label>
                <input type="text" class="form-control" name="cadastro_endereco" placeholder="Endereço" >
            </div>
            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Celular</label>
                <input type="text" class="form-control" name="cadastro_celular" placeholder="(11) 99999-9999" >
            </div>
            <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </body>
    </head>
</html>

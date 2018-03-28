<?php
$idAluno = $_GET["idAluno"];

?>
<html lang="pt">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Cadastro de Alunos</title>
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

                </script>
            </div>
        </nav>
            <div class="container theme-showcase" role="main">
                <div class="jumbotron" style="background-color: #e3f2fd;">
                    <h1>Cadastro de Alunos</h1>
                </div>
                <form action="action/inserir_cadastro_aluno.php" method="post" class="form-vertical col-md-12">
                    <div class="form-group col-md-5">
                        <label class="col-md-6">Nome Completo</label>
                        <input type="text" class="form-control" name="cadastro_nome" placeholder="Digite o Nome">
                        <?php echo $aluno_nome?>
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">RG</label>
                        <input type="text" class="form-control" name="cadastro_rg" placeholder="Digite seu RG">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">CPF</label>
                        <input type="text" class="form-control" name="cadastro_cpf" placeholder="Digite seu CPF">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">Data de Nascimento</label>
                        <input type="date" class="form-control" name="cadastro_dtNascimento" placeholder="Digite a data de Nascimento">
                    </div>

                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Sexo</label>
                        <select class="form-control col-md-8" size="1" name="cadastro_sexo">
                            <option></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Prefiro não Dizer">Prefiro não Dizer</option>
                        </select>
                    </div>
                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Selecione o Curso</label>
                        <select class="form-control col-md-8" size="1" name="cadastro_curso">
                            <option></option>
                            <option value="ADS">ADS</option>
                            <option value="Banco de Dados">Banco de Dados</option>
                            <option value="Corte e Custura">Corte e Custura</option>
                        </select>
                    </div>

                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Período</label>
                        <select class="form-control col-md-8" size="1" name="cadastro_turno">
                            <option></option>
                            <option value="manha">Manhã</option>
                            <option value="tarde">Tarde</option>
                            <option value="noite">Noite</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Anexar Foto</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">De preferência um nude.</p>
                    </div>
                    <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
    </body>
    </head>
</html>

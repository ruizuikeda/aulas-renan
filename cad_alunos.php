<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once 'include/db.php';
require_once 'include/phpLib_select_alunos_cadastrados.php';

$idAluno = $_GET['idAluno'];
$infoAluno = phpLib_get_aluno($idAluno);

$id             = $infoAluno['id'];
$nome           = $infoAluno['nome'];
$rg             = $infoAluno['rg'];
$cpf            = $infoAluno['cpf'];
$dataNascimento = $infoAluno['dataNascimento'];
$sexo           = $infoAluno['sexo'];
$curso          = $infoAluno['curso'];
$turno          = $infoAluno['turno'];


echo '<pre>'; print_r($idAluno); exit;


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
                                <li><a href="pesq_alunos.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pesquisar usuário</font></font></a></li>
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
                        <input type="text" class="form-control" value="<?php echo $nome?>"name="cadastro_nome" placeholder="Digite o Nome">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">RG</label>
                        <input type="text" class="form-control" value="<?php echo $rg?>" name="cadastro_rg" placeholder="Digite seu RG">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">CPF</label>
                        <input type="text" class="form-control" value="<?php echo $cpf?>" name="cadastro_cpf" placeholder="Digite seu CPF">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="col-md-6">Data de Nascimento</label>
                        <input type="date" class="form-control" value="<?php echo $dataNascimento?>" name="cadastro_dtNascimento" placeholder="Digite a data de Nascimento">
                    </div>

                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Sexo</label>
                        <select class="form-control col-md-8" size="1" name="cadastro_sexo">
                            <option value = "Masculino" <?php if ($sexo == "Masculino") echo 'selected'; ?> >Masculino</option>
                            <option value = "Feminino" <?php if ($sexo == "Feminino") echo 'selected'; ?> >Feminino</option>
                            <option value = "Prefiro não Dizer" <?php if ($sexo == "Prefiro não Dizer") echo 'selected'; ?> >Prefiro não Dizer</option>
                        </select>

                    </div>
                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Selecione o Curso</label>
                        <select class="form-control col-md-8" size="1"  name="cadastro_curso">
                            <option value = "ADS" <?php if ($curso == "ADS") echo 'selected'; ?> >ADS</option>                                       <option value = "Banco de Dados" <?php if ($curso == "Banco de Dados") echo 'selected'; ?> >Banco de Dados</option>       <option value = "Corte e Custura" <?php if ($curso == "Corte e Custura") echo 'selected'; ?> >Corte e Custura</option>
                        </select>
                    </div>

                    <div class= "form-group col-md-5">
                        <label  class="col-md-6">Período</label>
                        <select class="form-control col-md-8" size="1" value="<?php echo $turno?>" name="cadastro_turno">
                            <option value = "Manhã" <?php if ($curso == "Manhã") echo 'selected'; ?> >Manhã</option>                                 <option value = "Tarde" <?php if ($curso == "Tarde") echo 'selected'; ?> >Tarde</option>
                            <option value = "Noite" <?php if ($curso == "Noite") echo 'selected'; ?> >Noite</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="hidden" class="btn btn-danger">Apagar</button>
                    </div>

                </form>
            </div>
    </body>
    </head>
</html>

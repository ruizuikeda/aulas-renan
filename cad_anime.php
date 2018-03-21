<html lang="pt">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Cadastro de animes</title>
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
                            <li class="active"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastro de usuários</font></font></a></li>
                            <li><a href="#about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre</font></font></a></li>
                            <li><a href="#contact"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contato</font></font></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastro </font></font><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cadastro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastros de Usuários</font></font></a></li>
                                    <li><a href="cad_anime.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastros de Animes</font></font></a></li>
                                    <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qualquer coisa</font></font></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cabeçalho de navegação</font></font></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Link separado</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mais um link separado</font></font></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="page-header">
                <div class= "row">
                    <div class="col-md-12 text-center">
                        <div class="jumbotron">
                            <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar </font></font></h1>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uma página de teste para executar oque foi aprendido até agora. </font><font style="vertical-align: inherit;">Objetivo é criar uma tela simples e funcional usando PHP e Bootstrap.</font></font></p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="action/inserir_cadastro.php" method="post" class="form-horizontal col-md-6">
                <div class="form-group col-md-8">
                    <label for="exampleInputName2" class="col-md-6">Título</label>
                    <input type="text" class="form-control" name="cadastro_titulo" placeholder="Digite o título">
                </div>

                <div class="form-group col-md-8">
                    <label for="exampleInputEmail2" class="col-md-6">Ano de Publicação</label>
                    <input type="text" class="form-control" name="cadastro_ano" placeholder="Digite o ano ">
                </div>

                <div class="form-group col-md-8">
                    <label for="exampleInputName2" class="col-md-6">Autor</label>
                    <input type="text" class="form-control" name="cadastro_autor" placeholder="Autor">
                </div>


                <div class="form-group col-md-8 checkbox">
                    <label  class="col-md-12"><h4><b>Selecione o gênero</b></h4></label>
                    <label>
                        <input type="checkbox" value="">
                        Ação
                    </label>
                </div>
                <div class="form-group col-md-8 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Luta
                    </label>
                </div>
                <div class="form-group col-md-8 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Terror
                    </label>
                </div>
                <div class="form-group col-md-8 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Sci-fi
                    </label>
                </div>
                <div class="form-group col-md-8 checkbox">
                    <label>
                        <input type="checkbox" value="">
                        Aventura
                    </label>
                </div>
                <div class= "form-group col-md-8">
                    <label  class="col-md-8"><h4><b>Selecione o estudio de animação</b></h4></label>
                    <select class="form-control col-md-8">
                        <option></option>
                        <option>Graphis Studios Animation</option>
                        <option>Toei Animation</option>
                        <option>Tezuca Productions</option>
                        <option>Bones</option>
                        <option>White Fox</option>
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>
        </body>
    </head>
</html>

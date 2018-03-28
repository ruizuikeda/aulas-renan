<html lang="pt">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">

        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-table.css">
        <title>Pesquisa de Alunos</title>
        </head>
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

                </div>
            </nav>
            <div class="container theme-showcase" role="main">
                <div class="jumbotron" style="background-color: #e3f2fd;">
                    <h1>Alunos já cadastrados</h1>
                </div>
                <div class="table-responsive">
                    <table id="table"
                           data-toggle="table"
                           data-url="action/pesquisar_alunos.php"
                           data-show-pagination-switch="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-pagination="true"
                           data-search="true"
                           data-sortable="true"
                           data-content-type="application/json"
                           data-data-type="json"
                           data-filter-control="false">
                        <thead>
                        <tr>
                            <th data-field="id"             data-filter-control="input" data-align="center" data-sortable="true">ID</th>
                            <th data-field="nome"           data-filter-control="input" data-align="center" data-sortable="true">Nome</th>
                            <th data-field="RG"             data-filter-control="input" data-align="center" data-sortable="true">RG</th>
                            <th data-field="CPF"            data-filter-control="input" data-align="center" data-sortable="true">CPF</th>
                            <th data-field="dataNascimento" data-filter-control="input" data-align="center" data-sortable="true">Data de Nascimento</th>
                            <th data-field="sexo"           data-filter-control="input" data-align="center" data-sortable="true">Sexo</th>
                            <th data-field="curso"          data-filter-control="input" data-align="center" data-sortable="true">Curso</th>
                            <th data-field="turno"          data-filter-control="input" data-align="center" data-sortable="true">Turno</th>
                            <th data-field="acoes"          data-filter-control="input" data-align="center" data-sortable="true">Ações</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
            <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>

            <!-- Latest compiled and minified Locales -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-pt-BR.min.js"></script>
            <script type="text/javascrip">

            </script>
        </body>

</html>

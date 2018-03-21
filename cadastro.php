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
        <div class="page-header">
           <div class= "row">
               <div class="col-md-12 text-center">
                <div class="jumbotron">
                <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tela de Cadastro</font></font></h1>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uma página de teste para executar oque foi aprendido até agora. </font><font style="vertical-align: inherit;">Objetivo é criar uma tela simples e funcional com Bootstrap.</font></font></p>
                </div>
               </div>
            </div>
        </div>
        <form class="form-horizontal col-md-6">
            <div class="form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">Nome</label>
                <input type="text" class="form-control" id="cadastro_nome" placeholder="Digite seu nome">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Sobrenome</label>
                <input type="text" class="form-control" id="cadastro_sobrenome" placeholder="Digite seu Sobrenome">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">Login</label>
                <input type="text" class="form-control" id="cadastro_login" placeholder="Seu Login">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Senha</label>
                <input type="password" class="form-control" id="cadastro_senha" placeholder="Digite uma Senha">
            </div>


            <div class= "form-group col-md-8">
                <label for="exampleInputName2" class="col-md-6">CPF</label>
                <input type="text" class="form-control" id="cadastro_cpf" placeholder="CPF">
            </div>

            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Endereço</label>
                <input type="text" class="form-control" id="cadastro_endereco" placeholder="Endereço" >
            </div>
            <div class="form-group col-md-8">
                <label for="exampleInputEmail2" class="col-md-6">Celular</label>
                <input type="text" class="form-control" id="cadastro_celular" placeholder="(11) 99999-9999" >
            </div>
            <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </body>
    </head>
</html>

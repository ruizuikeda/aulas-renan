<?php
/********************************************************/
/* BIBLIOTECAS                                          */
/********************************************************/
require_once '../include/db.php';


/********************************************************/
/* PARAMETROS DE ENTRADA                                */
/********************************************************/
$usuario_nome = $POST["cadastro_nome"];
$usuario_sobrenome = $POST["cadastro_sobrenome"];
$usuario_login = $_POST["login"];
$usuario_senha = $_POST["senha"];
$usuario_cpf = $POST["cadastro_cpf"];
$usuario_endereco = $POST["cadastro_endereco"];
$usuario_celular = $POST["cadastro_celular"];


/********************************************************/
/* VALIDANDO CASO TRIVIAL                               */
/********************************************************/
if ($usuario_login == '') {
    header ('Location: ../index.php?msg=1');
    exit;
}
if ($usuario_senha == '') {
    header ('Location: ../index.php?msg=2');
    exit;
}


/********************************************************/
/* VALIDAR O LOGIN PELO DB                              */
/********************************************************/
$sql = "
    SELECT *
    FROM usuarios
    WHERE login = '$usuario_login' AND senha = '$usuario_senha' AND status = 1;
";
$result = mysql_query($sql);
// validando se a escrita do sql era boa
if(!$result) {
    echo "Sua consulta SQL foi mal escrita.";
    exit;
}

if(mysql_num_rows($result)>0) {
    // existe um usuario com login e senha que bate
    while($row = mysql_fetch_assoc($result)){
        $r[] = $row;
    }

    // gravar na session o usuario logado
    $_SESSION['logado_nome']        = $r[0]['nome'];
    $_SESSION['logado_sobrenome']   = $r[0]['sobrenome'];
    $_SESSION['logado_cpf']         = $r[0]['cpf'];
    $_SESSION['logado_endereco']    = $r[0]['endereco'];
    $_SESSION['logado_celular']     = $r[0]['celular'];

    // vamos pra home
    header('Location: ../home.php');
    exit;


} else {
    // não existe nenhum usuário com esse login e senha
    header ('Location: ../index.php?msg=3');
    exit;
}




?>

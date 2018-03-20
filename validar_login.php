<?php
session_start();
$usuario_login = $_GET["login"];
$usuario_senha = $_GET["senha"];

if ($usuario_login == '') {
    header ('Location: login.php?msg=1');
    exit;
}

if ($usuario_senha == '') {
    header ('Location: login.php?msg=2');
    exit;
}


$valida = array($usuario_login, $usuario_senha);
switch($valida) {
    case ($valida[0] == 'renan' && $valida[1] == '123'):
        header ('Location: home.php');
        $_SESSION["nome_usuario"]=$usuario_login;
        break;

    case ($valida[0] == 'helder' && $valida[1] == '321'):
        header ('Location: home.php');
        $_SESSION["nome_usuario"]=$usuario_login;
        break;

    case ($valida[0] == 'ikeda' && $valida[1] == '456'):
        header ('Location: home.php');
        $_SESSION["nome_usuario"]=$usuario_login;
        break;
    default:
        header ('Location: login.php?msg=3');
        exit;
        break;


}

?>

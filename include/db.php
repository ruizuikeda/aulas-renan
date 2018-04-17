<?php
/********************************************************/
/* SCRIPT DE CONEXAO COM O BANCO DE DADOS               */
/********************************************************/
// deu inicio a utilização da sessions
session_start();


/********************************************************/
/* PARAMETROS DO DB                                     */
/********************************************************/
$db_host = 'localhost';
$db_port = '8888';
$db_user = 'root';
$db_pwd = 'root';
$db_table = 'aulas_renan';


/********************************************************/
/* CONEXAO DO DB                                        */
/********************************************************/
$conexao = mysql_connect("$db_host:$db_port",$db_user,$db_pwd);
mysql_select_db($db_table,$conexao);
if(!$conexao) {
    echo "Não conectou ao database.";
    exit;
}
?>

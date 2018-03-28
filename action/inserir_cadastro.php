<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_cadastro.php';



/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$cadastro_nome          = (string)$_POST['cadastro_nome'];
$cadastro_sobrenome     = (string)$_POST['cadastro_sobrenome'];
$cadastro_login         = (string)$_POST['cadastro_login'];
$cadastro_senha         = (string)$_POST['cadastro_senha'];
$cadastro_cpf           = (string)$_POST['cadastro_cpf'];
$cadastro_endereco      = (string)$_POST['cadastro_endereco'];
$cadastro_celular       = (string)$_POST['cadastro_celular'];



/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../index.php?msg=1';
$retorno_falha          = '../cadastro.php?msg=0';




/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/
// retirando os espaços em branco das laterais do campo
$cadastro_nome          = trim($cadastro_nome);
$cadastro_sobrenome     = trim($cadastro_sobrenome);
$cadastro_login         = trim($cadastro_login);
$cadastro_senha         = trim($cadastro_senha);
$cadastro_cpf           = trim($cadastro_cpf);
$cadastro_endereco      = trim($cadastro_endereco);
$cadastro_celular       = trim($cadastro_celular);

// tornando mais seguro
$cadastro_nome          = mysql_real_escape_string($cadastro_nome);
$cadastro_sobrenome     = mysql_real_escape_string($cadastro_sobrenome);
$cadastro_login         = mysql_real_escape_string($cadastro_login);
$cadastro_senha         = mysql_real_escape_string($cadastro_senha);
$cadastro_cpf           = mysql_real_escape_string($cadastro_cpf);
$cadastro_endereco      = mysql_real_escape_string($cadastro_endereco);
$cadastro_celular       = mysql_real_escape_string($cadastro_celular);

// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_nome === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_sobrenome === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_login === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_senha === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_cpf === '') {
    header('Location: '.$retorno_falha);
    exit;
}



/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
$idUsuario = phpLibCadastro_insert_usuarios_cadastrar_novo_usuario($cadastro_nome, $cadastro_sobrenome, $cadastro_login, $cadastro_senha, $cadastro_cpf, $cadastro_endereco, $cadastro_celular);
if(!$idUsuario) {
    header('Location: '.$retorno_falha);
    exit;
}



/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;










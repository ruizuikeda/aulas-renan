<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_cadastro_animes.php';



/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$cadastro_titulo        = (string)$_POST['cadastro_titulo'];
$cadastro_ano           = (string)$_POST['cadastro_ano'];
$cadastro_autor         = (string)$_POST['cadastro_autor'];
$cadastro_genero        = (string)$_POST['cadastro_genero'];
$cadastro_editora       = (string)$_POST['cadastro_editora'];

/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../cadastro.php?msg=1';
$retorno_falha          = '../cadastro.php?msg=0';


/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/
// retirando os espaços em branco das laterais do campo
$cadastro_titulo       = trim($cadastro_titulo);
$cadastro_ano          = trim($cadastro_ano);
$cadastro_autor        = trim($cadastro_autor);
$cadastro_genero       = trim($cadastro_genero);
$cadastro_editora      = trim($cadastro_editora);



// tornando mais seguro
$cadastro_titulo      = mysql_real_escape_string($cadastro_titulo);
$cadastro_ano         = mysql_real_escape_string($cadastro_ano);
$cadastro_autor       = mysql_real_escape_string($cadastro_autor);
$cadastro_genero      = mysql_real_escape_string($cadastro_genero);
$cadastro_editora     = mysql_real_escape_string($cadastro_editora);


// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_titulo === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_ano === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_autor === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_genero === '') {
    header('Location: '.$retorno_falha);
    exit;
}
if($cadastro_editora === '') {
    header('Location: '.$retorno_falha);
    exit;
}



/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
$idUsuario = phpLibCadastro_insert_animes_cadastrar_novo_anime($cadastro_titulo, $cadastro_ano, $cadastro_autor, $cadastro_genero, $cadastro_editora);
if(!$idAnime) {
    header('Location: '.$retorno_falha);
    exit;
}


/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;

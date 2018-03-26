<?php
session_start();
require_once '../include/db.php';
//require_once '../include/phpLib_inserir_respostas.php';



echo '<pre>'; print_r($_POST);
exit;

/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$alternativasSelecionadas      = $_POST;
$cadastro_nome                 = (string)$_SESSION['cadastro_nome'];

//echo '<pre>'; print_r($alternativasSelecionadas);
//exit;

/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../questionario.php?msg=0';
$retorno_falha1         = '../questionario.php?msg=1';
$retorno_falha2         = '../questionario.php?msg=2';
$retorno_falha3         = '../questionario.php?msg=3';




/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/

// tornando mais seguro
$cadastro_nome                = mysql_real_escape_string($cadastro_nome);
$alternativasSelecionadas     = mysql_real_escape_string($alternativasSelecionadas);


// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_nome === '') {
    header('Location: '.$retorno_falha2);
    exit;
}
if($alternativasSelecionadas === array()) {
    header('Location: '.$retorno_falha3);
    exit;
}




/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
$idUsuario = phpLibCadastro_insert_prova_inserir_respostas($cadastro_nome, $alternativasSelecionadas);
if(!$idProva) {
    header('Location: '.$retorno_falha);
    exit;
}



/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;



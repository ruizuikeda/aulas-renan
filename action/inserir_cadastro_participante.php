<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_cadastro_participante.php';

//echo '<pre>'; print_r($_POST); exit;

/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$cadastro_nome             = (string)$_POST['cadastro_nome'];
$cadastro_setor            = (string)$_POST['cadastro_setor'];
$cadastro_cargo            = (string)$_POST['cadastro_cargo'];


/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../questionario.php';
$retorno_falha1         = '../cad_participante.php?msg=1';
$retorno_falha2         = '../cad_participante.php?msg=2';
$retorno_falha3         = '../cad_participante.php?msg=3';
$retorno_falha4         = '../cad_participante.php?msg=4';
$retorno_falha5         = '../cad_participante.php?msg=5';


/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/
// retirando os espaços em branco das laterais do campo
$cadastro_nome                 = trim($cadastro_nome);
$cadastro_setor                = trim($cadastro_setor);
$cadastro_cargo                = trim($cadastro_cargo);

// tornando mais seguro
$cadastro_nome                = mysql_real_escape_string($cadastro_nome);
$cadastro_setor               = mysql_real_escape_string($cadastro_setor);
$cadastro_cargo               = mysql_real_escape_string($cadastro_cargo);

// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_nome === '') {
    header('Location: '.$retorno_falha1);
    exit;
}
if($cadastro_setor === '') {
    header('Location: '.$retorno_falha2);
    exit;
}
if($cadastro_cargo === '') {
    header('Location: '.$retorno_falha3);
    exit;
}



/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
$idParticipante = phpLibCadastro_insert_participantes_cadastrar_novo_participante($cadastro_nome, $cadastro_setor, $cadastro_cargo);
if(!$idParticipante) {
    header('Location: '.$retorno_falha8);
    exit;
}



$_SESSION['cadastro_nome']        = $_POST['cadastro_nome'];
$_SESSION['idParticipante']       = $idParticipante;
/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;

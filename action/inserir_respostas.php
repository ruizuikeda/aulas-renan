<?php
require_once '../include/db.php';
require_once '../include/phpLib_questionarios.php';




$resp_participante = $_POST;
$cadastro_nome     = (string)$_SESSION['cadastro_nome'];
$idParticipante   = $_SESSION['idParticipante'];


//echo $idParticipantes;
//exit;


$respostas = phpLib_getAll_perguntas();
foreach ($respostas as $resp){
    $respCertas[] = $resp['respostaCorreta'];

}



/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../resultado.php?msg=0';
$retorno_falha1         = '../questionario.php?msg=1';
$retorno_falha2         = '../questionario.php?msg=2';
/****************************************************************/
/*  Calculando a nota do participante                           */
/****************************************************************/
$nota=0;
if ($resp_participante['alternativasSelecionadas'][1] == $respCertas[0]) {

    $nota++;
}

if ($resp_participante['alternativasSelecionadas'][2] == $respCertas[1]) {

    $nota++;
}

if ($resp_participante['alternativasSelecionadas'][3] == $respCertas[2]) {

    $nota++;
}




$idnota = phpLib_update_participantes_atualiza_nota_do_participante($nota,$idParticipante);
//var_dump($idnota);exit;
if(!$idnota) {
    header('Location: '.$retorno_falha1);
    exit;
}

/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;
?>

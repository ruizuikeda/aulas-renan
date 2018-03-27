<?php
session_start();
require_once '../include/db.php';
require_once '../include/phpLib_questionarios.php';


$resp_participante = $_POST;



$respostas = phpLib_getAll_perguntas();
foreach ($respostas as $resp){
    $respCertas[] = $resp['respostaCorreta'];

}

//echo '<pre>'; print_r($respCertas);
//exit;



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


$_SESSION       = $_POST[$nota];

echo $nota
?>

<?php
require_once '../include/phpLib_questionario.php';

/********************************************************************/
/*  Coletânia de funções associadas a prova                         */
/********************************************************************/
$alternativasSelecionadas      = $_POST;
$resposta = phpLib_getAll_perguntas();
$respostas = $resposta[0];
$idRespostas = $respostas['respostaCorreta'];

echo '<pre>'; print_r($idRespostas);exit;



function phpLibCadastro_insert_prova_inserir_respostas($cadastro_nome, $respostasCertas) {
    $sql = "
        INSERT INTO provas_respondidas
        (nome, respostasCorretas)
        VALUES
        ('$cadastro_nome', '$respostasCertas');
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idProva = mysql_insert_id();

    return $idProva;
}
?>

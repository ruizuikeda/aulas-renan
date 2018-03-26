<?php
/********************************************************************/
/*  Coletânia de funções associadas a prova                         */
/********************************************************************/
$alternativasSelecionadas      = $_POST;


function phpLibVerificar_respostas_certas($alternativasSelecionadas){
    $resposta1 = $alternativasSelecionadas[0];
    $resposta2 = $alternativasSelecionadas[1];
    $resposta3 = $alternativasSelecionadas[2]


}




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

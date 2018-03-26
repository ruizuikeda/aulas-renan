<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro                      */
/********************************************************************/





function phpLibCadastro_insert_prova_inserir_respostas($cadastro_nome, $alternativasSelecionadas) {
    $sql = "
        INSERT INTO provas_respondidas
        (nome, respostasCorretas)
        VALUES
        ('$cadastro_nome', '$alternativasSelecionadas');
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idProva = mysql_insert_id();

    return $idProva;
}

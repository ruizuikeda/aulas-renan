<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro dos alunos           */
/********************************************************************/
function phpLibCadastro_insert_participantes_cadastrar_novo_participante($cadastro_nome, $cadastro_setor, $cadastro_cargo) {
    $sql = "
        INSERT INTO alunos
        (nome, setor, cargo)
        VALUES
        ('$cadastro_nome', '$cadastro_setor', '$cadastro_cargo');
    ";

    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idParticipante = mysql_insert_id();

    return $idParticipante;

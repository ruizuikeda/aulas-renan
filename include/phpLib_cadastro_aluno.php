<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro dos animes           */
/********************************************************************/
function phpLibCadastro_insert_alunos_cadastrar_novo_aluno($cadastro_nome, $cadastro_rg, $cadastro_cpf, $cadastro_dataNascimento, $cadastro_sexo, $cadastro_curso, $cadastro_turno) {
    $sql = "
        INSERT INTO alunos
        (nome, rg, cpf, dataNascimento, sexo, curso, turno, periodo)
        VALUES
        ('$cadastro_nome', '$cadastro_rg', '$cadastro_cpf', '$cadastro_dataNascimento', '$cadastro_sexo', '$cadastro_curso', '$cadastro_turno');
    ";

    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idAluno = mysql_insert_id();

    return $idAluno;
}



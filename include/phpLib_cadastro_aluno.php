<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro dos alunos           */
/********************************************************************/
function phpLibCadastro_insert_alunos_cadastrar_novo_aluno($cadastro_nome, $cadastro_rg, $cadastro_cpf, $cadastro_dtNascimento, $cadastro_sexo, $cadastro_curso, $cadastro_turno) {
    $sql = "
        INSERT INTO alunos
        (nome, rg, cpf, dataNascimento, sexo, curso, turno)
        VALUES
        ('$cadastro_nome', '$cadastro_rg', '$cadastro_cpf', '$cadastro_dtNascimento', '$cadastro_sexo', '$cadastro_curso', '$cadastro_turno');
    ";

    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idAluno = mysql_insert_id();

    return $idAluno;
}


function phpLib_update_desabilita_aluno($id){
    $sql = "
        UPDATE alunos
        SET status = '0'
        WHERE id = '$id'
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    return true;
}


function phpLib_update_atualiza_dados_aluno($id, $cadastro_nome, $cadastro_rg, $cadastro_cpf, $cadastro_dtNascimento, $cadastro_sexo, $cadastro_curso, $cadastro_turno){
    $sql = "
        UPDATE alunos
        SET nome = '$cadastro_nome' , rg = '$cadastro_rg', cpf = '$cadastro_cpf', dataNascimento ='$cadastro_dtNascimento', sexo = '$cadastro_sexo', curso = '$cadastro_curso', turno = '$cadastro_turno'
        WHERE id = '$id'
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    return true;
}



?>

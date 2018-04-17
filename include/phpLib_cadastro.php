<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro                      */
/********************************************************************/
function phpLibCadastro_insert_usuarios_cadastrar_novo_usuario($cadastro_nome, $cadastro_sobrenome, $cadastro_login, $cadastro_senha, $cadastro_cpf, $cadastro_endereco, $cadastro_celular) {
    $sql = "
        INSERT INTO usuarios
        (nome, sobrenome, login, senha, cpf, endereco, celular)
        VALUES
        ('$cadastro_nome', '$cadastro_sobrenome', '$cadastro_login', '$cadastro_senha', '$cadastro_cpf', '$cadastro_endereco', '$cadastro_celular');
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idUsuario = mysql_insert_id();

    return $idUsuario;
}

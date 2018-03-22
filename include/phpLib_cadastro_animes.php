<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro                      */
/********************************************************************/
function phpLibCadastro_insert_animes_cadastrar_novo_anime($cadastro_titulo, $cadastro_ano, $cadastro_autor, $cadastro_genero, $cadastro_editora) {
    $sql = "
        INSERT INTO animes
        (titulo, ano, autor, genero, editora)
        VALUES
        ('$cadastro_titulo', '$cadastro_ano', '$cadastro_autor', '$cadastro_genero', '$cadastro_editora');
    ";

    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idAnime = mysql_insert_id();

    return $idAnime;
}

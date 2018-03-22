<?php
/********************************************************************/
/*  Coletânia de funções associadas a cadastro dos animes           */
/********************************************************************/
function phpLibCadastro_insert_animes_cadastrar_novo_anime($cadastro_titulo, $cadastro_ano, $cadastro_autor, $cadastro_editora) {
    $sql = "
        INSERT INTO animes
        (titulo, ano, autor, editora)
        VALUES
        ('$cadastro_titulo', '$cadastro_ano', '$cadastro_autor', '$cadastro_editora');
    ";

    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idAnime = mysql_insert_id();

    return $idAnime;
}



function phpLibCadastro_insert_animes_ref_genero_nova_ref($idAnime, $idGenero) {
    $sql = "
        INSERT INTO animes_ref_genero
        (idAnime, idGenero)
        VALUES
        ('$idAnime', '$idGenero');
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    return mysql_insert_id();
}

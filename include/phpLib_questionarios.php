<?php



function phpLibQuestionarios_getAll_questionarios() {
    $sql = "
        SELECT *
        FROM questionarios
        WHERE status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}

function phpLibQuestionarios_getAll_perguntas_de_um_determinado_questionario($idQuestionario) {
    $sql = "
        SELECT *
        FROM questionarios_ref_perguntas
        WHERE idQuestionario = '$idQuestionario' AND status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}

function phpLibQuestionarios_get_pergunta($idPergunta) {
    $sql = "
        SELECT *
        FROM perguntas
        WHERE idPergunta = '$idPergunta' AND status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r[0];
}
//função nova para pegar todas as perguntas
function phpLib_getAll_perguntas() {
    $sql = "
        SELECT *
        FROM perguntas
        WHERE status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}

//Criado no intuito de trazer toda a tabela
function phpLibQuestionarios_getAll_perguntas_ref_alternativa() {
    $sql = "
        SELECT *
        FROM perguntas_ref_alternativas
        WHERE status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}



function phpLibQuestionarios_getAll_perguntas_ref_alternativas($idPergunta) {
    $sql = "
        SELECT *
        FROM perguntas_ref_alternativas
        WHERE idPergunta = '$idPergunta' AND status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}

function phpLibQuestionarios_get_alternativa($idAlternativa) {
    $sql = "
        SELECT *
        FROM alternativas
        WHERE idAlternativa = '$idAlternativa' AND status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r[0];
}

function phpLib_getAll_alternativa() {
    $sql = "
        SELECT *
        FROM alternativas
        WHERE status = 1
    ";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return array();
    return $r;
}


function phpLib_update_participantes_atualiza_nota_do_participante($nota,$idParticipante){
    $sql = "
        UPDATE participantes
        SET notaProva = '$nota'
        WHERE idParticipante = '$idParticipante'
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    return true;
}

function phpLibCadastro_insert_participantes_cadastrar_novo_participante($cadastro_nome, $cadastro_setor, $cadastro_cargo) {
    $sql = "
        INSERT INTO participantes
        (nome, setor, cargo)
        VALUES
        ('$cadastro_nome', '$cadastro_setor', '$cadastro_cargo');
    ";
    $result = mysql_query($sql);

    // validando se foi executado com sucesso
    if(!$result) return false;

    $idParticipante = mysql_insert_id();

    return $idParticipante;
}

?>



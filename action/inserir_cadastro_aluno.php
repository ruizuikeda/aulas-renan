<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_cadastro_aluno.php';


/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$id                        = (int)$_POST['id'];
$cadastro_nome             = (string)$_POST['cadastro_nome'];
$cadastro_rg               = (string)$_POST['cadastro_rg'];
$cadastro_cpf              = (string)$_POST['cadastro_cpf'];
$cadastro_dtNascimento     = $_POST['cadastro_dtNascimento'];
$cadastro_sexo             = (string)$_POST['cadastro_sexo'];
$cadastro_curso            = (string)$_POST['cadastro_curso'];
$cadastro_turno            = (string)$_POST['cadastro_turno'];

//print_r($_POST); exit;



/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../cad_alunos.php?msg=inserido';
$retorno_sucesso2       = '../cad_alunos.php?msg=atualizado';
$retorno_falha1         = '../cad_alunos.php?msg=1';
$retorno_falha2         = '../cad_alunos.php?msg=2';
$retorno_falha3         = '../cad_alunos.php?msg=3';
$retorno_falha4         = '../cad_alunos.php?msg=4';
$retorno_falha5         = '../cad_alunos.php?msg=5';
$retorno_falha6         = '../cad_alunos.php?msg=6';
$retorno_falha7         = '../cad_alunos.php?msg=7';
$retorno_falha8         = '../cad_alunos.php?msg=8';
$retorno_falha9         = '../cad_alunos.php?msg=9';


/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/
// retirando os espaços em branco das laterais do campo
$cadastro_nome                = trim($cadastro_nome);
$cadastro_rg                  = trim($cadastro_rg);
$cadastro_cpf                 = trim($cadastro_cpf);
$cadastro_sexo                = trim($cadastro_sexo);
$cadastro_curso               = trim($cadastro_curso);
$cadastro_turno               = trim($cadastro_turno);

// tornando mais seguro
$cadastro_nome                = mysql_real_escape_string($cadastro_nome);
$cadastro_rg                  = mysql_real_escape_string($cadastro_rg);
$cadastro_cpf                 = mysql_real_escape_string($cadastro_cpf);
$cadastro_sexo                = mysql_real_escape_string($cadastro_sexo);
$cadastro_curso               = mysql_real_escape_string($cadastro_curso);
$cadastro_turno               = mysql_real_escape_string($cadastro_turno);


// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_nome === '') {
    header('Location: '.$retorno_falha1);
    exit;
}
if($cadastro_rg === '') {
    header('Location: '.$retorno_falha2);
    exit;
}
if($cadastro_cpf === '') {
    header('Location: '.$retorno_falha3);
    exit;
}
if($cadastro_dtNascimento === '') {
    header('Location: '.$retorno_falha4);
    exit;
}
if($cadastro_sexo === '') {
    header('Location: '.$retorno_falha5);
    exit;
}
if($cadastro_curso === '') {
    header('Location: '.$retorno_falha6);
    exit;
}
if($cadastro_turno === '') {
    header('Location: '.$retorno_falha7);
    exit;
}



/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
if ($id) {
    $id_Aluno = phpLib_update_atualiza_dados_aluno($id, $cadastro_nome, $cadastro_rg, $cadastro_cpf, $cadastro_dtNascimento, $cadastro_sexo, $cadastro_curso, $cadastro_turno);
//    echo 'consegui atualizar'; exit;
    if(!$id_Aluno) {
        header('Location: '.$retorno_falha9);
        exit;
    }




/****************************************************************/
/*  FINALIZAR ATUALIZAÇÃO                                       */
/****************************************************************/
    header('Location: '.$retorno_sucesso2);
    exit;
} else {

$idAluno = phpLibCadastro_insert_alunos_cadastrar_novo_aluno($cadastro_nome, $cadastro_rg, $cadastro_cpf, $cadastro_dtNascimento, $cadastro_sexo, $cadastro_curso, $cadastro_turno);
if(!$idAluno) {
    header('Location: '.$retorno_falha8);
    exit;
}


/****************************************************************/
/*  FINALIZAR INSERÇÃO                                          */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;
}

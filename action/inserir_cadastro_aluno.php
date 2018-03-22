<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_cadastro_aluno.php';

//echo '<pre>'; print_r($_POST); exit;

/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$cadastro_nome             = (string)$_POST['cadastro_nome'];
$cadastro_rg               = (string)$_POST['cadastro_rg'];
$cadastro_cpf              = (string)$_POST['cadastro_cpf'];
$cadastro_dataNascimento   = (string)$_POST['cadastro_dataNascimento'];
$cadastro_sexo             = (string)$_POST['cadastro_sexo'];
$cadastro_curso            = (string)$_POST['cadastro_curso'];
$cadastro_turno            = (string)$_POST['cadastro_turno'];


/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../cad_alunos.php?msg=0';
$retorno_falha1         = '../cad_alunos.php?msg=1';
$retorno_falha2         = '../cad_alunos.php?msg=2';
$retorno_falha3         = '../cad_alunos.php?msg=3';
$retorno_falha4         = '../cad_alunos.php?msg=4';
$retorno_falha5         = '../cad_alunos.php?msg=5';
$retorno_falha6         = '../cad_alunos.php?msg=6';
$retorno_falha7         = '../cad_alunos.php?msg=7';


/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/
// retirando os espaços em branco das laterais do campo
$cadastro_nome                = trim($cadastro_nome);
$cadastro_rg                  = trim($cadastro_rg);
$cadastro_cpf                 = trim($cadastro_cpf);
$cadastro_dataNascimento      = trim($cadastro_dataNascimento);
$cadastro_sexo                = trim($cadastro_sexo);
$cadastro_curso               = trim($cadastro_curso);
$cadastro_turno               = trim($cadastro_turno);

// tornando mais seguro
$cadastro_nome                = mysql_real_escape_string($cadastro_nome);
$cadastro_rg                  = mysql_real_escape_string($cadastro_rg);
$cadastro_cpf                 = mysql_real_escape_string($cadastro_cpf);
$cadastro_dataNascimento      = mysql_real_escape_string($cadastro_dataNascimento);
$cadastro_sexo                = mysql_real_escape_string($cadastro_sexo);
$cadastro_curso               = mysql_real_escape_string($cadastro_curso);
$cadastro_turno               = mysql_real_escape_string($cadastro_turno);


// vendo se veio tudo o que obrigatoriamente eu gostaria
if($cadastro_titulo === '') {
    header('Location: '.$retorno_falha1);
    exit;
}
if($cadastro_ano === '') {
    header('Location: '.$retorno_falha2);
    exit;
}
if($cadastro_autor === '') {
    header('Location: '.$retorno_falha3);
    exit;
}
if($cadastro_genero === array()) {
    header('Location: '.$retorno_falha4);
    exit;
}
if($cadastro_editora === '') {
    header('Location: '.$retorno_falha5);
    exit;
}



/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/
$idAnime = phpLibCadastro_insert_alunos_cadastrar_novo_aluno($cadastro_titulo, $cadastro_ano, $cadastro_autor, $cadastro_editora);
if(!$idAnime) {
    header('Location: '.$retorno_falha6);
    exit;
}




/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/
header('Location: '.$retorno_sucesso);
exit;

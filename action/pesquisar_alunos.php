<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_select_alunos_cadastrados.php';

$id_alunos          = phpLib_getAll_alunos($idAlunos);
//echo count($id_alunos);exit;
for ($i = 0; $id_alunos[$i];$i++){

    $id             = $id_alunos[$i]['id'];
    $nome           = $id_alunos[$i]['nome'];
    $rg             = $id_alunos[$i]['rg'];
    $cpf            = $id_alunos[$i]['cpf'];
    $dataNascimento = $id_alunos[$i]['dataNascimento'];
    $sexo           = $id_alunos[$i]['sexo'];
    $curso          = $id_alunos[$i]['curso'];
    $turno          = $id_alunos[$i]['turno'];
/****************************************************************/
/*  MONTANDO JSON                                               */
/****************************************************************/
//    $r[$i]['id']       =$id;
//    $r[$i]['nome']     =$nome;
//    $r[$i]['rg']       =$rg;
//    $r[$i]['id']       =$cpf;
//    $r[$i]['id']       =$dataNascimento;
//    $r[$i]['id']       =$sexo;
//    $r[$i]['id']       =$curso;
//    $r[$i]['id']       =$turno;



    echo '<pre>'; print_r($nome);
//    echo $nome . "-" . $id_alunos[$i]. "<br>";

}




?>

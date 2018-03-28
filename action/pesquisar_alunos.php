<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/phpLib_select_alunos_cadastrados.php';

$id_alunos          = phpLib_getAll_alunos();
//echo '<pre>'; print_r($id_alunos);

for ($i = 0; $id_alunos[$i];$i++){

    $id             = $id_alunos[$i]['id'];
    $nome           = $id_alunos[$i]['nome'];
    $rg             = $id_alunos[$i]['rg'];
    $cpf            = $id_alunos[$i]['cpf'];
    $dataNascimento = $id_alunos[$i]['dataNascimento'];
    $sexo           = $id_alunos[$i]['sexo'];
    $curso          = $id_alunos[$i]['curso'];
    $turno          = $id_alunos[$i]['turno'];
    $acoes          = "<a href= 'cad_alunos.php?idAluno=$id'>Alterar</a>";
/****************************************************************/
/*  MONTANDO JSON                                               */
/****************************************************************/
    $r[$i]['id']               =$id;
    $r[$i]['nome']             =$nome;
    $r[$i]['RG']               =$rg;
    $r[$i]['CPF']              =$cpf;
    $r[$i]['dataNascimento']   =$dataNascimento;
    $r[$i]['sexo']             =$sexo;
    $r[$i]['curso']            =$curso;
    $r[$i]['turno']            =$turno;
    $r[$i]['acoes']            =$acoes;
}
echo json_encode($r);



//echo '<pre>'; print_r($r['nome']);
?>

<?php


function phpLib_getAll_alunos() {
$sql = "
SELECT *
FROM alunos
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

function phpLib_get_aluno($idAluno) {
    $sql = "
SELECT *
FROM alunos
WHERE id = $idAluno and status = 1
";
    $result = mysql_query($sql);
    if(!$result) return array();
    if(mysql_num_rows($result)>0) {
    return mysql_fetch_assoc($result);

    } else return false;

}


?>

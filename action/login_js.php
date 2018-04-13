<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == 'ikeda' and $senha == '123') {
    // pode logar
    echo 1;
} else {
    // não pode logar
    echo -1;
}

<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == 'renan' and $senha == '321') {
    // pode logar
    echo 1;
} else {
    // não pode logar
    echo -1;
}

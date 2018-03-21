<?php
/****************************************************************/
/*  BIBLIOTECAS                                                 */
/****************************************************************/
require_once '../include/db.php';



/****************************************************************/
/*  PARAMETROS DE ENTRADA                                       */
/****************************************************************/
$cadastro_nome          = (string)$_POST['cadastro_nome'];
$cadastro_sobrenome     = (string)$_POST['cadastro_sobrenome'];
$cadastro_login         = (string)$_POST['cadastro_login'];
$cadastro_senha         = (string)$_POST['cadastro_senha'];
$cadastro_cpf           = (string)$_POST['cadastro_cpf'];
$cadastro_endereco      = (string)$_POST['cadastro_endereco'];
$cadastro_celular       = (string)$_POST['cadastro_celular'];



/****************************************************************/
/*  CONFIGURAÇÕES                                               */
/****************************************************************/
$retorno_sucesso        = '../cadastro.php?msg=1';
$retorno_falha          = '../cadastro.php?msg=0';




/****************************************************************/
/*  VALIDAR A ENTRADA                                           */
/****************************************************************/




/****************************************************************/
/*  SCRIPT                                                      */
/****************************************************************/




/****************************************************************/
/*  FINALIZAR                                                   */
/****************************************************************/

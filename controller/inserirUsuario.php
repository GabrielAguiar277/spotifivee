<?php
include_once("../model/modelUsuario.php");
include_once("../model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(inserirUsuarioBanco($conexao,$senha,$email)){
header("Location: ../cadCliente.php");

session_start();

$_SESSION['email'] = $_POST['email'];
}else{
header("Location: ../loginForm.php");
}
?>
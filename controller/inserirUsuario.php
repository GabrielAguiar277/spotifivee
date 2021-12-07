<?php
include_once("../model/modelUsuario.php");
include_once("../model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

$senha = $_POST['senha'];
$email = $_POST['email'];

if(inserirUsuarioBanco($conexao,$senha,$email)){
header("Location: ../index.php");
}else{
header("Location: ../loginForm.php");
}
?>
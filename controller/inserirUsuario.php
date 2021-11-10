<?php
include_once("../model/modelUsuario.php");
include_once("../model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuarioBanco($conexao,$senha,$email)){
header("Location: ../view/cadUsuario.php");
}else{
header("Location: ../view/cadUsuario.php");
}
?>
<?php
include_once("../model/modelCliente.php");
include_once("../model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(inserirCliente($conexao,$nome, $tel, $id_usu)){
header("Location: ../index.php");
}else{
header("Location: ../loginForm.php");
}
?>
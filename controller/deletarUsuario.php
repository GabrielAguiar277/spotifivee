<?php
    include_once("../model/conexao.php");
    include_once("../model/modelUsuario.php");
    
    extract($_REQUEST,EXTR_OVERWRITE);


    if(deletarUsuario($conexao, $codUsu)){
        header("Location: ../visuUsuario.php");
    }else{
        header("Location: ../index.php");
    }
?>

<?php

function inserirUsuarioBanco($conexao,$senha,$email){

$opcao = ['cost' => 8];

$senhaCrypto=password_hash($senha, PASSWORD_BCRYPT,$opcao);

$query = "insert into tb_usuario(Email_Usua, Senha_Usua)values('{$email}','{$senhaCrypto}')";
$resultado = mysqli_query($conexao,$query);
return $resultado;
}

function listaTudoUsuario($conexao){
    $query = "select * from tb_usuario";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}
    ?>
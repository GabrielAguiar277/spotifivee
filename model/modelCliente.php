<?php
    function inserirCliente($conexao, $nome, $fone, $id_usu){
        $query = "insert into tb_cliente(Nome_Clie, Fone_Clie, Dt_Nasc Id_Usua)values('{$nome}', '{$fone}', '{$id_usu}')";
        $resultado = mysqli_query($conexao,$query);
    }
?>
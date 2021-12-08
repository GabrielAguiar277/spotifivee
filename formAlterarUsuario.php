<?php
    include_once("./model/conexao.php");
    include_once("./model/modelUsuario.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/form.css">

    <title>Spotifive</title>
</head>
<body>

<?php
    include_once("./header.php");
    include_once("./aside.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    $resultado = listaUsuarioCodigo($conexao, $codUsu);
    $usuario = mysqli_fetch_assoc($resultado);
?>

<?php
    include_once("./model/conexao.php");
    include_once("./model/modelUsuario.php");
?>


<main class="formAltera">
    <form method="POST" action="./controller/alterarUsuario.php">
        <div class="input-field">
            <label for="codigo">Código</label>
            <input type="text" readonly required value="<?=$usuario["Id_Usua"]?>" name="codUsu" id="codigo">
        </div>
        <div class="input-field">
            <label for="email">Email</label>
            <input type="email" required value="<?=$usuario["Email_Usua"]?>" name="emailUsu">
        </div>
        <div class="input-field">
            <label for="pass">Senha</label>
            <input type="pass" required name="senha">
        </div>

        <button class="search" type="submit">Alterar</button>
    </form>
</main>

<?php
    include_once("bottomPlayer.php");
    include_once("footer.php");
?>
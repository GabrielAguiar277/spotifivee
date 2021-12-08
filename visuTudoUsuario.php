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
    include_once("./aside.php");
?>

<main>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <td>E-mail</td>
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $usuarios = listaTudoUsuario($conexao);
                foreach($usuarios as $usuario){
            ?>
                    <tr>
                        <th><?=$usuario["Id_Usua"]?></th>
                        <td><?=$usuario["Email_Usua"]?></td>

                        <td>
                            <form action="./formAlterarUsuario.php" method="POST">
                                <input type="hidden" name="codUsu" value="<?=$usuario["Id_Usua"]?>">
                                <button class="confirm" type="submit">Alterar</button>
                            </form>
                        </td>

                        <td>
                            <form action="./controller/deletarUsuario.php" method="POST">
                                <input type="hidden" name="codUsu" value="<?=$usuario["Id_Usua"]?>">
                                <button class="deny" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</main>

<?php
    include_once("bottomPlayer.php");
    include_once("./footer.php");
?>
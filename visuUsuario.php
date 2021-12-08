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
    <div class="formulario">
        <form method="POST" action="visuUsuario.php">
            <div class="input-field">
                <label for="codUsu">Código usuário</label>
                <input type="number" id="codUsu" name="codigoUsu">
            </div>

            <button type="submit" class='search'>Buscar</button>
        </form>
        <form method="POST" action="visuUsuario.php">
            <div class="input-field">
                <label for="email">Email usuário</label>
                <input type="email" id="email" name="emailUsu">
            </div>

            <button type="submit" class="search">Buscar</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>Código</td>
                <td>E-mail</td>
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $codigoUsu = isset($_POST['codigoUsu'])? $_POST["codigoUsu"]:"";
                $emailUsu = isset($_POST['emailUsu'])? $_POST["emailUsu"]:"";

                if($codigoUsu){
                    $usuario = listaUsuarioCodigo($conexao, $codigoUsu);
                }else{
                    $usuario = listaUsuarioEmail($conexao, $emailUsu);
                }

                foreach($usuario as $usuarios){
            ?>
                    <tr>
                        <th><?=$usuarios["Id_Usua"]?></th>
                        <td><?=$usuarios["Email_Usua"]?></td>
                        <td>
                            <form action="./formAlterarUsuario.php" method="POST">
                                <input type="hidden" name="codUsu" value="<?=$usuarios["Id_Usua"]?>">
                                <button class="confirm" type="submit">Alterar</button>
                            </form>
                        </td>

                        <td>
                            <form action="./controller/deletarUsuario.php" method="POST">
                                <input type="hidden" name="codUsu" value="<?=$usuarios["Id_Usua"]?>">
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
    include_once("footer.php");
?>
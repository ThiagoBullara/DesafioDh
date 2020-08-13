<?php 

    require("../Required/insert.php");
    
    $query = $db -> prepare("SELECT id, nome, email FROM usuarios;");
    $query -> execute();
    $usuarios = $query -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="createUsuario.css">
        <title>Cadastrar - Usuário</title>
    </head>
    <body>
    
        <?php require_once('..\Header\header.php'); ?>

        <main class="modal">
            <form method="POST">
                <div class="titulo">
                    <h1>Criar usuário</h1><br>
                </div>
                <ul>
                    <li>
                        <div class="inputs"> 
                            <label for="nomeUsuario">Nome</label><br>
                            <input class="input-personalizado <?php if(!$nomePost){ echo ('dado-invalido'); }; ?>" type="text" name="nomeUsuario" id="nomeUsuario" <?php if(!$nomePost){ echo ('placeholder="Insira um nome!"'); }; ?> required><br>
                        </div>
                    </li>
                    <li>
                        <div class="inputs">
                            <label for="email">E-mail</label><br>
                            <input class="input-personalizado <?php if(!$emailPost){ echo ('dado-invalido'); }; ?>" type="email" name="email" id="email" <?php if(!$emailPost){ echo ('placeholder="Insira um email válido!"'); }; ?> required><br>
                        </div>
                    </li>
                    <li>
                        <div class="inputs">
                            <label for="senha">Senha</label><br>
                            <input class="input-personalizado <?php if(!$senhaPost){ echo ('dado-invalido'); }; ?>" type="password" name="senha" id="senha" <?php if(!$senhaPost){ echo ('placeholder="Senha muito pequena!"'); }; ?> required><br>
                        </div>
                    </li>
                    <li>
                        <div class="inputs">
                            <label for="confirmaSenha">Confirma a senha</label><br>
                            <input class="input-personalizado <?php if($senhaConfirmadaPost != $senhaPost){ echo ('dado-invalido'); }; ?>" type="password" name="confirmaSenha" id="confirmaSenha" <?php if($senhaConfirmadaPost != $senhaPost){ echo ('placeholder="Senhas diferentes!"'); }; ?> required><br>
                        </div>
                    </li>
                </ul>
                <div class="botao">
                    <button class="botao-personalizado" type="submit">Criar</button>
                </div>
            </form>
            <a href="../Login/login.php" class="voltar">Voltar para login</a>
            <table>
                <thead>
                    <tr>
                        <th class="nome">Nome usuário</th>
                        <th class="email">E-mail</th>
                        <th class="editar">Editar</th>
                        <th class="excluir">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td class="td-nome">
                                <?php echo $usuario['nome']?>
                            </td>
                            <td class="td-email">
                                <?php echo $usuario['email']?>
                            </td>
                            <td class="table-center">
                                <form action="../EditarUsuario/editarUsuario.php" method="POST">
                                    <input type="hidden" value="<?= $usuario['id'] ?>" name="id">
                                    <input type="submit" class="btn-editar" value="Editar">
                                </form>
                            </td>
                            <td class="table-center td-editar">
                                <form action="../Required/deleteUsuario.php" method="POST" >
                                    <input type="hidden" value="<?= $usuario['id']; ?>" name="id">
                                    <input type="submit" class="btn-deletar" value="Excluir">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </main>
        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>
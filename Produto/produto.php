<?php

    require("../Required/pdo.php");

    $id = $_POST['id'];
    $query = $db -> prepare("SELECT nome, descricao, preco, imagem FROM produtos WHERE id = :id;");
    $query -> execute([':id' => $id]);
    $produtos = $query -> fetchAll(PDO::FETCH_ASSOC);

    require_once("../Required/manterLogin.php");

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="produto.css">
        <title>Produto</title>
    </head>
    <body>

        <?php require_once('..\Header\header.php'); ?>

        <?php foreach ($produtos as $produto): ?>

        <main class="modal">
            <ul>
                <li>
                    <section class="imagem">
                        <img src="../Img/<?php echo $produto['imagem'];?>" alt="Imagem Produto" style="width: 400px; height: 400px;"> 
                    </section>
                </li>
                <li>
                    <section class="produto">
                        <h1><?php echo $produto['nome'];?></h1>
                        <h2>Descrição</h2>
                        <p><?php echo $produto['descricao'];?></p>
                        <div class="preco">
                            <h2>Preço:</h2>
                            <p>R$:<?php echo $produto['preco'];?></p>
                        </div>                
                    </section>
                </li>
            </ul>
            <div class="btns">
                <form action="../EditarProduto/editarProduto.php" method="POST" style="">
                    <input type="hidden" value="<?= $id; ?>" name="id">
                    <input type="submit" value="Editar" class="#" style="border: blue 1px solid; background: none; color: blue; cursor: pointer; padding: 1% 10%; font-size: 16px;">
                </form>
                <form action="../Required/deleteProduto.php" method="POST" style="">
                    <input type="hidden" value="<?= $id; ?>" name="id">
                    <input type="submit" value="Excluir" class="#" style="border: red 1px solid; background: none; color: red; cursor: pointer; padding: 1% 10%; font-size: 16px; margin-top: 20px;">
                </form>
            </div>  
        </main>

        <?php endforeach; ?>

        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>
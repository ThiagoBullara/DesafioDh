<?php 

require_once("../Required/manterLogin.php");

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="editarProduto.css">
        <title>Editar - Produto</title>
    </head>
    <body>
    
        <?php require_once('..\Header\header.php'); ?>

        <main class="modal">
            <form action="../Required/editProduto.php" method="POST" enctype="multipart/form-data">
                <div class="titulo">
                    <h1>Editar produto</h1><br>
                </div>
                <div class="inputs"> 
                    <label for="novoNome">Novo nome</label><br>
                    <input class="input-personalizado" type="text" name="nome" id="novoNome" required><br>
                </div>
                <div class="inputs">
                    <label for="novoPreco">Novo preço</label><br>
                    <input class="input-personalizado" type="text" name="preco" id="novoPreco" required><br>
                </div>
                <div class="texto-area">
                    <label for="novaDescricao">Nova descrição</label><br>
                    <textarea class="text-area-personalizada" name="descricao" id="novaDescricao" required></textarea><br>
                </div>
                <div class="imagem">
                    <label for="novaFoto">Nova foto<input class="imagem-personalizada" type="file" name="imagem" id="novaFoto" required></label><br>
                </div>
                <input type="hidden" name="id" value="<?= $_POST['id']; ?>">
                <div class="botao">
                    <button class="botao-personalizado" type="submit">Salvar</button>
                </div>
            </form> 

            <a href="../Produtos/produtos.php" class="voltar">Voltar para produtos</a> 

        </main>
        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>
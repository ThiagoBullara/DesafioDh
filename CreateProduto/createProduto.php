<?php

    require("../Required/insertProduto.php");

    require_once("../Required/manterLogin.php");
    
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="createProduto.css">
        <title>Cadastro - Produto</title>
    </head>
    <body>
    
        <?php include('..\Header\header.php'); ?>

        <main class="modal">
            <form method="POST" enctype="multipart/form-data">
                <div class="titulo">
                    <h1>Cadastrar Produto</h1><br>
                </div>
                <div class="inputs"> 
                    <label for="nome">Nome</label><br>
                    <input class="input-personalizado" type="text" name="nome" id="nome" required><br>
                </div>
                <div class="inputs">
                    <label for="preco">Preço</label><br>
                    <input class="input-personalizado" type="text" name="preco" id="preco" required><br>
                </div>
                <div class="texto-area">
                    <label for="descricao">Descrição</label><br>
                    <textarea class="text-area-personalizada" name="descricao" id="descricao"></textarea><br>
                </div>
                <div class="imagem">
                    <label for="imagem">Foto do produto<input class="imagem-personalizada" type="file" name="imagem" id="imagem" required></label><br>
                </div>
                <div class="botao">
                    <form action="../Required/insertProduto.php" enctype="multipart/form-data">
                        <button class="botao-personalizado" type="submit">Enviar</button>
                    </form>
                </div>
            </form> 

            <a href="../Produtos/produtos.php" class="voltar">Voltar para produtos</a> 

        </main>
        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>

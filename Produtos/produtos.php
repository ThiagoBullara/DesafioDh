<?php
    
    require("../Required/pdo.php");

    $query = $db -> prepare("SELECT id, nome, descricao, preco FROM produtos;");
    $query -> execute();
    $produtos = $query -> fetchAll(PDO::FETCH_ASSOC);

    require_once("../Required/manterLogin.php");
        
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="produtos.css">
        <title>Produtos</title>
    </head>
    <body>
        
        <?php require_once('..\Header\header.php'); ?>

        <main class="modal">
            <h1>Nossos Produtos</h1>
            <table>
                <thead>
                    <tr>
                        <th class="nome" style="width: 20%;">Nome do produto</th>
                        <th class="descricao" style="width: 50%;">Descrição</th>
                        <th class="preco" style="width: 10%;">Preço</th>
                        <th class="editar" style="width: 10%;">Editar</th>
                        <th class="visualizar" style="width: 10%;">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                        <tr>
                            <td class="td-nome">
                                <form action="../Produto/produto.php" method="POST">
                                    <input type="hidden" value="<?= $produto['id']; ?>" name="id">
                                    <input type="submit" value="<?php echo $produto['nome']?>" style="border: none; background: none; color: blue; cursor: pointer;">
                                </form>
                            </td>
                            <td style="word-wrap: break-word">
                                <?php echo $produto['descricao']?>
                            </td>
                            <td class="table-center">
                                <?php echo 'R$'.$produto['preco']?>
                            </td>
                            <td class="table-center">
                                <form action="../Editarproduto/editarProduto.php" method="POST">
                                    <input type="hidden" value="<?= $produto['id']; ?>" name="id">
                                    <input type="submit" value="Editar" style="border: none; background: none; color: #F21CD5; cursor: pointer;" onMouseOver="this.style.color='#04E813'" onMouseOut="this.style.color='#F21CD5'">
                                </form>
                            </td>
                            <td class="table-center">
                                <form action="../Produto/produto.php" method="POST">
                                    <input type="hidden" value="<?= $produto['id']; ?>" name="id">
                                    <input type="submit" value="&#9654;" style="border: none; background: none; color: #04E813; cursor: pointer;">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="botao">
                <a href="../CreateProduto/createProduto.php"><button class="botao-personalizado">Novo produto</button></a>
            </div>
        </main>
        <footer style="margin-top: 10%;">
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>


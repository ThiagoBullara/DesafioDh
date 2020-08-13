<style>

    /* Header */

    header {
        background-color: #2e2e2e;
        margin-bottom: 3%;
        padding: 2% 1%;
    }

    header ul {
        position: absolute;
        top: 2.5%;
        right: 0;
        width: 35%;
    }

    header nav ul .nav-itens {
        display: inline-block;
        padding: 0 1.5%;
        font-size: 16px;
    }

    header nav ul .nav-itens a {
        color: #e2e2e2;
        text-decoration: none;
    }

    header nav ul .nav-itens a:hover {
        color: #e2e2e2;
        text-decoration: underline;
    }

    header nav ul .nav-itens a form input {
        font-size: 16px;
        color: #e2e2e2;
        text-decoration: none;
        background: none;
        border: none;
    }
    
    header nav ul .nav-itens a form input:hover {
        cursor: pointer;
        text-decoration: underline;
    }

</style>

<header>
        <nav>
            <ul>
                <li class="nav-itens"><a href="../Produtos/produtos.php">Produtos</a></li>
                <li class="nav-itens"><a href="../CreateProduto/createProduto.php">Cadastrar Produto</a></li>
                <li class="nav-itens"><a href="../CreateUsuario/createUsuario.php">Criar/Editar Usuário</a></li>
                <li class="nav-itens"><a href="../Login/login.php"><form action="../Required/logout.php"><input type="submit" value="Sair"></form></a></li>
            </ul>
        </nav>
</header>
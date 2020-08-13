<?php

    session_start();

    require("../Required/pdo.php");

    if ($_POST) {

        $query = $db -> prepare("SELECT email, senha FROM usuarios;");
        $query -> execute();
        $login = $query -> fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($login as $acesso) {
            if ($_POST['email'] == $acesso['email'] && password_verify($_POST['password'], $acesso['senha'])) {
                $_SESSION['logado'] = true;
                return header("Location: ../Produtos/produtos.php");
            } else {
                header("Location: ../Login/login.php");
            }
        }
    } 
?>
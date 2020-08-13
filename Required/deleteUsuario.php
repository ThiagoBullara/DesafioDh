<?php
    
    require("../Required/pdo.php");

    require_once("../Required/manterLogin.php");

    $id = $_POST['id'];
    $query = $db -> prepare("DELETE FROM usuarios WHERE id = :id;");
    $query -> execute([':id' => $id]);
    
    header("Location: ../CreateUsuario/createUsuario.php");

?>


<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"])) {
        
        deleteUser($_POST["user_id"]);
        echo "ID:".$_POST["user_id"];
        echo "DONE";
        header("location: usuario.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: login.php");
    }

?>

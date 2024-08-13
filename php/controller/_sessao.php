<?php
    session_start();

    function setUsuario($usuario){
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
    }

    function isSession(){
        if(!isset($_SESSION['email'])){
            header('location:usuario.php?login');
        }
    }
?>
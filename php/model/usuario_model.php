<?php
    include 'dbfunctions.php';

    function inserir($nome, $email, $senha){
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM usuario";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($email){
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($nome, $email, $senha){
        $sql = "UPDATE usuario  SET nome='$nome',senha='$senha' WHERE email = '$email'";
        executarSQL($sql);
    }
    function excluir($email){
        $sql = "DELETE FROM usuario  WHERE email = '$email'";
        executarSQL($sql);
    }
?>
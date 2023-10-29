<?php
include('config.php');
include('database.php');

function add($nome, $cpf, $email, $senha) {
    include('config.php');
    include('database.php');
    $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')";
    
    try{
        mysqli_query($conn, $sql);
    }catch(Exception $e){
        echo "Erro -> ". $e->getMessage();
    }

}
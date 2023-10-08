<?php
    include('../inc/database.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT COUNT(*) as total FROM usuario WHERE email = '$email' and senha = '$senha'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    var_dump($row);

    if($row['total'] > 0){
        echo 'logou';
    }else{
        echo 'nao logou';
    }

?>
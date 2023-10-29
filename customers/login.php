<?php
    session_start();
    include('../inc/database.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $numRows = "SELECT COUNT(*) as total FROM usuario WHERE email = '$email' and senha = '$senha'";
    $resultNumRows = $conn->query($numRows);
    $numRowss = $resultNumRows->fetch_assoc();
    

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
    $result2 = $conn->query($sql);
    $row = $result2->fetch_array();

    if($numRowss['total'] > 0){
        $user = $row['nome'];
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['user'] = $user;
        header('location: ../index.php');
    }else{
        $_SESSION['error_login'] = '<p class="msg-err">Não foi possível realizar seu login.</p>';
        header('location: ./entrar.php');
    }

?>
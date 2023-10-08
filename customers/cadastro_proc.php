<?php 
    include('../inc/database.php');    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf_formatado = str_replace(array(".", "-"), "", $cpf);

    if (!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        $sql = "SELECT COUNT(*) as total FROM usuario WHERE cpf = '$cpf_formatado'";
        $result = $conn->query($sql);
        
        if ($result === false) {
            die("Erro na consulta SQL: " . $conn->error);
        }
        
        $row = $result->fetch_assoc();
        
        if ($row['total'] > 0) {
            $_SESSION['mensagem-err'] = "<p class='msg-err'>CPF já existe no banco de dados.</p>";
        } else {
            $query = mysqli_query($conn, "INSERT INTO usuario(nome, cpf, email, senha) VALUES('$nome', '$cpf_formatado', '$email', '$senha')");
            $_SESSION['mensagem-succ'] = "<p class='msg-succ'>Cadastro realizado com sucesso!</p>";
            $cadastro = true;
        }
    }else{
        $_SESSION['messagem-err'] = "<p class='msg-err'>Erro no cadastro!". $conn->error . "</p>";
    }


?>
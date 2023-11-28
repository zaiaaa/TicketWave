<?php
    //session_start();
    //include('../inc/database.php');
    include('../inc/config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('cadastro_proc.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>TicketWave | Cadastro</title>
</head>
<body>
    <!--///////////////NAVBAR////////////////////////-->
    <?php include('../inc/header.php')?>
    <!--///////////////NAVBAR////////////////////////-->
        
    <!--///////////////CONTENT////////////////////-->
    <main>
        <div class="cadastro">
            <h1>Cadastro de usuários</h1>
            
            <?php  
                // if (isset($_SESSION['mensagem-succ'])) {
                //     echo $_SESSION['mensagem-succ'];
                //     unset($_SESSION['mensagem-succ']); // Remove a mensagem para não mostrá-la novamente
                // }else if(isset($_SESSION['mensagem-err'])){
                //     echo $_SESSION['mensagem-err'];
                //     unset($_SESSION['mensagem-err']); // Remove a mensagem para não mostrá-la novamente
                // }
            ?>

            <div class="cadastro-conteudo">
                <form action="cadastro.php" method="POST">
                    <div class="input-ct">
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" required>
                    </div>
                    <div class="input-ct">
                        <label for="cpf">CPF</label><br>
                        <input type="text" name="cpf" id="cpf" maxlength="14" required>
                    </div>
                    <div class="input-ct">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-ct">
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha" required>
                    </div>
                    <div class="botoes">
                        <button class="enviar" type="submit">Cadastrar</button>
                        <button class="resetar" type="reset">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php if (isset($_SESSION['mensagem-succ'])): ?>
        <div class="message-succ">
            <?php 
            echo $_SESSION['mensagem-succ'];
            unset($_SESSION['mensagem-succ']);
            ?>

        </div>
        <?php elseif (isset($_SESSION['mensagem-err'])): ?>
            <div class="message-err">
                <?php
                echo $_SESSION['mensagem-err'];
                unset($_SESSION['mensagem-err']);
                ?>
            </div>
        <?php endif; ?>

    </main>



    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/awesome/all.min.js"></script>
    <script src="../js/awesome/fontawesome.min.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/mascara.js"></script>
    <script src="../js/alert.js"></script>
</body>
</html>
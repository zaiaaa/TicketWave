<?php
    session_start();
    include('../inc/database.php');
    include('../inc/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/entrar.css">
    <title>TicketWave | Cadastro</title>
</head>
<body>
    <!--///////////////NAVBAR////////////////////////-->
    <?php include('../inc/header.php')?>
    <!--///////////////NAVBAR////////////////////////-->
        
    <!--///////////////CONTENT////////////////////-->
    <main>
        <div class="cadastro">
            <h1>Entrar</h1>

            <div class="cadastro-conteudo">
                <form action="login.php" method="POST">
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
    </main>



    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/awesome/all.min.js"></script>
    <script src="../js/awesome/fontawesome.min.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/mascara.js"></script>
</body>
</html>
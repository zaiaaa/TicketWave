<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/header.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/carousel.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/card-event.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/user_bar.css">
    <title>TicketWave</title>
</head>
<body>
<div class="navbar">
        <div class="icon-search">
            <h2><a href="<?php echo BASEURL; ?>">TicketWave</a></h2>
            
            <div class="search">
                <form action="#">
                    <input type="text" class="corner-mask">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <div class="nav-buttons" id="navButtons">
            <nav>
                <ul>
                    <li class="item"><a class="active" href="">Home</a></li>
                    <li class="item"><a href="">Ingressos comprados</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </nav>
            <div class="buttons" id="divBtn">
                <?php if(!isset($_SESSION['email'])): ?>
                    <a href="<?php echo BASEURL?>customers/cadastro.php"><button class="cad">Cadastrar</button></a>
                    <a href="<?php echo BASEURL?>customers/entrar.php"><button class="ent">Entrar</button></a>
                <?php else: ?>
                    <h3 id="user">Bem vindo, <?php echo $_SESSION['user']?></h3>
                <?php endif?>
            </div>
        </div>
</div>

<div class="closed" id="sideBarUserID">
    <div class="btnFechar">
        <i class="fa-solid fa-x" id="fecharMenu"></i>
    </div>

    <div class="header-sideBar">
        <h2><?php echo $_SESSION['user']?></h2>
        <?php echo $_SESSION['email']?>
    </div>

    <ul>
        <a href="a" class="item"><li>Minha conta</li></a>
        <a href="<?php echo BASEURL?>customers/logout.php" class="item"><li>Sair</li></a>
    </ul>
</div>
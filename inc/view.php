<?php
    $id_evento = base64_decode($_GET['id_evento']);
?>

<?php
    include('./database.php');
    include('./config.php');

    $queryImg = mysqli_query($conn, "SELECT * FROM imagens");
    
    $queryEvento = mysqli_query($conn, "SELECT * FROM concerto");
    $dadosEv = mysqli_fetch_array($queryEvento);

    $queryEventoCard = mysqli_query($conn, "SELECT * FROM concerto");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/card-event.css">
    <title>TicketWave</title>
</head>
<body>
    <!--///////////////NAVBAR////////////////////////-->
    <div class="navbar">
        <div class="icon-search">
            <h2><a href="../index.php">TicketWave</a></h2>
            
            <div class="search">
                <form action="#">
                    <input type="text" class="corner-mask">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <div class="nav-buttons">
            <nav>
                <ul>
                    <li class="item"><a class="active" href="">Home</a></li>
                    <li class="item"><a href="">Eventos próximos</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </nav>
            <div class="buttons">
                <button class="cad">Cadastrar</button>
                <button class="ent">Entrar</button>
            </div>
        </div>
    </div>
    <!--///////////////NAVBAR////////////////////////-->
        
    <!--///////////////CONTENT////////////////////-->
    <main>
        a
    </main>


    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/awesome/all.min.js"></script>
    <script src="../js/awesome/fontawesome.min.js"></script>
    <script src="../js/carousel.js"></script>
</body>
</html>
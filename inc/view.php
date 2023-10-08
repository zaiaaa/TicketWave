<?php
    $id_evento = base64_decode($_GET['id_evento']);
?>

<?php
    include('./database.php');
    include('./config.php');

    $queryImg = mysqli_query($conn, "SELECT * FROM imagens where id_concerto = $id_evento");
    
    $queryEvento = mysqli_query($conn, "SELECT * FROM concerto where id=$id_evento");
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
    <link rel="stylesheet" href="../css/view.css">
    <title>TicketWave</title>
</head>
<body>
    <!--///////////////NAVBAR////////////////////////-->
    <?php include('header.php')?>
    <!--///////////////NAVBAR////////////////////////-->
        
    <!--///////////////CONTENT////////////////////-->
    <main>
        
        <div class="evento">
            <div class="evento-header">
                <h1><?php echo $dadosEv['nome']?></h1>
                <p><?php echo $dadosEv['cantores']?></p>
            </div>
            <?php while($dadosImg = mysqli_fetch_array($queryImg)) { 
            echo '<img src="'. ARQUIVOS_PATH . $dadosImg['caminho'] . '" alt="Imagem 1">';
            }?>   
            <div class="evento-conteudo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae recusandae at voluptatum non aliquid vitae ipsum dolor perspiciatis totam eligendi, optio vel qui nostrum eveniet, impedit beatae soluta alias?</p>    

                <p>Lote 1</p>
                <p>124,00 R$</p>
                <button>Comprar</button>
                <p>Localização</p>
            </div>
        </div>
        
        
    </main>


    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/awesome/all.min.js"></script>
    <script src="../js/awesome/fontawesome.min.js"></script>
    <script src="../js/carousel.js"></script>
</body>
</html>
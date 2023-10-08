<?php
    $id_evento = base64_decode($_GET['id_evento']);
?>

<?php
    include('inc/database.php');
    include('inc/config.php');

    $queryImg = mysqli_query($conn, "SELECT * FROM imagens where id_concerto = $id_evento");
    
    $queryEvento = mysqli_query($conn, "SELECT * FROM concerto where id=$id_evento");
    $dadosEv = mysqli_fetch_array($queryEvento);

    $queryEventoCard = mysqli_query($conn, "SELECT * FROM concerto");

    $valor_formatado = number_format($dadosEv['valor'], 2, ',', '.');

    $agora = new DateTime($dadosEv['data_show']);

    $data = $agora->format('d/m/Y \à\s H:i:s');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/view.css">
    <title>TicketWave</title>
</head>
<body>
    <!--///////////////NAVBAR////////////////////////-->
    <?php include('inc/header.php')?>
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
                <p class="desc"><?php echo $dadosEv['descricao']?></p>    

                <div class="lote-preco">
                    <p class="lote">Lote <?php echo $dadosEv['lote']?></p>
                    <p class="preco">R$ <?php echo number_format($dadosEv['valor'], 2, ',', '.')?></p>
                </div>
                <button type="button">Comprar  <i class="fa-solid fa-cart-shopping"></i></button>
                
                <div class="evento-footer">
                    <p><?php echo $dadosEv['local_concerto']?></p>
                    <p><?php echo $data?></p>
                </div>
            </div>
        </div>
        
        
    </main>


    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/awesome/all.min.js"></script>
    <script src="js/awesome/fontawesome.min.js"></script>
    <script src="js/carousel.js"></script>
</body>
</html>
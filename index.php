<?php
    include('inc/database.php');
    include('inc/config.php');

    $queryImg = mysqli_query($conn, "SELECT * FROM imagens");
    
    $queryEvento = mysqli_query($conn, "SELECT * FROM concerto");
    $dadosEv = mysqli_fetch_array($queryEvento);

    $queryEventoCard = mysqli_query($conn, "SELECT * FROM concerto ORDER BY data_show");

?>
    <?php include('inc/header.php')?>
        
    <!--///////////////CONTENT////////////////////-->
    <main>
        <div class="carousel-container">
            <div class="carousel">
                <?php while($dados = mysqli_fetch_array($queryImg)):?>
                    <div class="slide">
                        <img src=" <?php echo ARQUIVOS_PATH . $dados['caminho']; ?>" alt="Imagem 1">
                        <div class="description"><?php 
                        $fk_id_concerto = $dados['id_concerto'];
                        $queryEv = mysqli_query($conn, "SELECT * FROM concerto where id = $fk_id_concerto");
                        
                        while($dadosEv = mysqli_fetch_array($queryEv)){
                            echo $dadosEv['descricao'];
                        } ?></div>
                    </div>';
                <?php endwhile; ?>
                
            </div>
            <button class="prev-button"><</button>
            <button class="next-button">></button>
        </div>

        <div class="borda">
        </div>

        <h1 class="title">Featured Events</h1>
        <div class="cards">
            <?php while($dadosEvento=mysqli_fetch_array($queryEventoCard)): ?>
                <?php
                    $id = $dadosEvento['id'];
                    $queryImgCard = mysqli_query($conn, "SELECT * FROM imagens where id_concerto = $id");
                    $dadosImg = mysqli_fetch_array($queryImgCard);
                ?>
                <div class="card-event">
                    <img src="<?php echo ARQUIVOS_PATH . $dadosImg['caminho']?>">
                    <div class="header-card">
                        <?php 
                        $data = $dadosEvento['data_show'];
                        $dia = date("d", strtotime($data)); // Obtém o dia
                        $mes = date("m", strtotime($data)); // Obtém o mês
                        ?>
                        <h2><?php echo $dia?>/<?php echo $mes?></h2>
                        <hr class="vertical-line">
                        <h2><a href="view.php?id_evento=<?php echo base64_encode($id)?>"><?php echo $dadosEvento['nome']?></a></h2>
                    </div>
                    
                    <br>
                    
                    <div class="card-body">
                        <h3><?php echo $dadosEvento['local_concerto']?></h3>
                        <p><?php echo $dadosEvento['limite_ingresso']?> Ingressos restantes</p>
                    </div>
                </div>
            <?php endwhile?>
            <?php
        ?>
        </div>
    </main>



    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/awesome/all.min.js"></script>
    <script src="js/awesome/fontawesome.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/user.js"></script>
</body>
</html>
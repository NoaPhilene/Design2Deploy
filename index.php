<?php
include("includes/header.php");
include("includes/connection.php");
?>



<body>
    <?php
        include("includes/topbar.php");
    ?>

    <div id="WelkomContainer">

        <div id="BovensBoxWelkomPagina">

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="assets/fotos/tuinFoto1.webp" >
                </div>

                <div class="mySlides fade">
                    <img src="assets/fotos/tuinFoto7.webp" >
                </div>

                <div class="mySlides fade">
                    <img src="assets/fotos/hendrik3.webp" >
                </div>

                <div class="mySlides fade">
                    <img src="assets/fotos/tuinFoto5.webp" >
                </div>

                <div class="mySlides fade">
                    <img src="assets/fotos/hendrik2.webp" >
                </div>

                <div class="mySlides fade">
                    <img src="assets/fotos/tuinFoto9.webp" >
                </div>

            </div>
            <br>
            <div id= "SlideshowRondjes">
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>

            
            <div id="beginTextVakWelkom">
                <p>Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt.</p>
            </div>
        </div>

        <div id="werkzaamheden">Werkzaamheden
            <div class="knoppenwerkzaamheden">
                <div class="werkzaamhedenknop"><a href="diensten.php"><img src="assets/fotos/icoontuinontwerp.webp"></a></div>
                <div class="werkzaamhedenknop"><a href="diensten.php"><img src="assets/fotos/icoontuinaanleg.webp"></a></div>
                <div class="werkzaamhedenknop"><a href="diensten.php"><img src="assets/fotos/icoontuinonderhoud.webp"></a></div>
                <div class="werkzaamhedenknop"><a href="diensten.php"><img src="assets/fotos/icoonzwemvijvers.webp"></a></div>
            </div>
        </div>

        <br>

        <div id="werktijdenslideshow">
            <div class="werktijdenvak">

        <div id="werktijdenslideshow">
            <div id="werktijdenvak">
              
                <div id="werktijdenwelkom">
                    Maandag: 7:00-16:00
                    Dinsdag: 7:00-16:00
                    Woensdag: 7:00-16:00
                    Donderdag: 7:00-16:00
                    Vrijdag: 7:00-16:00
                    Zaterdag: Op afspraak
                    Zondag: Gesloten
                </div>

                <div id="werktijdenfoto1"><img src="assets/fotos/tuinFoto3.webp"></div>
            </div>
        </div>
        <br>

            </div>
        </div>
        
        
        <div id="RecensiesWelkom">

            <div id=RecensiesTitle>Recensies</div>

            <div id=RecensiesBoxWelkom>
                <?php
                try{
                    $stmt = $conn->prepare("SELECT id, bericht, schrijver FROM reccensies ORDER BY id DESC LIMIT 3");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                        echo "<div class='RecensiesVakjesWelkom'>
                            <a href='recensies.php'>
                            <div id='RecensiesBericht'><p>{$v['bericht']}</p></div>
                            <div id='RecensiesSchrijver'><p>{$v['schrijver']}</p></div>
                            </a>
                        </div>";
                    }

                }catch (PDOException $e){
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>

<?php
    include("includes/footer.php")
?>

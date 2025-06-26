<?php
include("includes/header.php");
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
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
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
            </div>
        </div>

        <div id="recensieswelkom">Recensies
            <div class="recensievakjeswelkom">
                <div class="recensies"></div>
                <div class="recensies"></div>
                <div class="recensies"></div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>

<?php
    include("includes/footer.php")
?>

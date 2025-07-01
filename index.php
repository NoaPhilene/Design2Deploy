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

        <div id="Welkoms-vak">
            <div id="Welkoms-container">
            <div id="intro-tekstvak">
                <div id="intro-tekst">
                    De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt. Bij Hendrik Hogendijk Hoveniers vindt ik het daarom belangrijk dat iedereen zich thuis voelt in zijn of haar tuin. Ik maak de tuin onderdeel van jouw ‘thuis’, door hem volledig op jouw wensen af te stemmen.
                    <br>
                    <br>
                    Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant staat voor een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een gezellig terras en een kleurrijke bloemenborder: ik stop al mijn energie erin.
                    <br>
                    <br>
                    Ontwerp<br>
                    Wat jouw wensen ook zijn, ik maak een goed doordacht ontwerp voor de tuin van je dromen. Met mijn ontwerp krijg je een duidelijk beeld van jouw toekomstige tuin.<br>
                    Aanleg<br>
                    Van tuinontwerp naar jouw gewenste tuin. Ik verzorg de aanleg met een goed voorbereid plan. Met een kritisch oog en precisie leg ik de tuin voor je aan.<br>
                    Onderhoud<br>
                    Om het hele jaar door optimaal te genieten van jouw tuin is het belangrijk dat deze goed onderhouden wordt. Ik neem je graag deze zorg uit handen.
                </div>
            </div>
        <div id="Welkoms-fotos">
            <img src="assets/fotos/hendrik1.webp">
            <img src="assets/fotos/hendrik2.webp">
        </div>
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
            <div class="werktijdenflex">
                <div id="werktijdenvak">
                    <div id="werktijdenwelkom">
                    Maandag: 7:00-16:00<br>
                    Dinsdag: 7:00-16:00<br>
                    Woensdag: 7:00-16:00<br>
                    Donderdag: 7:00-16:00<br>
                    Vrijdag: 7:00-16:00<br>
                    Zaterdag: Op afspraak<br>
                    Zondag: Gesloten
                    </div>
                </div>
                <div class="werktijdenfotos">
                    <img src="assets/fotos/tuinFoto9.webp">
                    <img src="assets/fotos/tuinFoto7.webp">
                    <img src="assets/fotos/tuinFoto1.webp">
                </div>

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

<?php 
include("includes/connection.php");
include("includes/header.php");
include("includes/topbarmanager.php");
?>

<body>
    
    <?php
        include("includes/topBar.php");
    ?>

    <div id="achtergrondNew">

        <div id="invulveldenBoxNewRecensie">


            <form action="includes/recensies-insert.php" method="POST">
                <div id="insertVeldenRecensies">

                    <div id="RecensieNewInfo">
                        <p>Invul velden nieuwe recensie</p>
                    </div>

                    <div class="formulier-rij-recensie">
                        <p>Bericht van de recensie:</p>
                        <textarea id="bericht-recensies" name="bericht-recensies" placeholder="beschrijving" cols= "32" rows="4"></textarea>
                        <br>
                    </div>

                    <div class="formulier-rij-recensie">
                        <p>schrijver/bedenker van recensie:</p>
                        <input type="text" id="schrijver-recensies" name="schrijver-recensies" placeholder="naam">
                        <br>
                    </div>
                    
                    <div id="opslaanKnop-recensies">
                        <button type="submit" class="opslaan" name="submit">Opslaan</button>
                    </div>

                </div>  
                    
            </form>
        </div>
    </div>

    <?php
    include("includes/footer.php");
    ?>
        
    
</body>

</html>
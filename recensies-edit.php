<?php 
include("includes/connection.php");
include("includes/header.php");

try {
    $stmt = $conn->prepare("SELECT id, bericht, schrijver FROM reccensies");
    $stmt->execute();
    $recensies = $stmt->fetchAll(); // Resultaten één keer ophalen

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

    if (isset($_GET['id'])){

        foreach ($recensies as $v){

            if($_GET['id'] == $v['id']){
                $id = $v['id'];

                $bericht = $v['bericht'];
                $schrijver = $v['schrijver'];
            }
        }
    }else{
        echo "product niet gevonden";
        exit;
    }

?>

<body>

    <?php
    include("includes/topbarmanager.php");
    ?>

    <div id="achtergrondEdit">
    

        <div id="editBoxRecensies"> 

             <form action="includes/update.php" method="POST">

                <div id="insertVelden">

                <div id="editInfoRecensies">
                    <p>Verander alleen de velden die je wil veranderen de andere laten hoe die is</p>
                </div>

                    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                
                    <div class="formulier-rij">
                        <p>Bericht van de recensie:</p>
                        <input type="text" id="bericht-recensies" name="bericht-recensies" value="<?= htmlspecialchars($bericht) ?>">
                        <br>
                    </div>
                    
                    <div class="formulier-rij">
                        <p>schrijver/bedenker van recensie:</p>
                        <input type="text" id="schrijver-recensies" name="schrijver-recensies" value="<?= htmlspecialchars($schrijver) ?>">
                        <br>
                    </div>

                     <div class="formulier-rij">
                        <p>Id: <?php echo $id ?></p>
                    </div>
                    
                </div>  
                
                <button type="submit" class="opslaan" name="submit">Opslaan</button>
                
            </form>
        </div>
    </div>

    <?php
    include("includes/footer.php");
    ?>
    
    </body>

</html>
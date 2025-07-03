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

    include("includes/topbarmanager.php");
?>

<body>


    <div id="achtergrondEditRecensies">
    

        <div id="editBoxRecensies"> 

             <form action="includes/recensies-update.php" method="POST">

                <div id="insertVelden">

                    <div id="editInfoRecensies">
                        <p>Verander alleen de velden die je wil veranderen de andere laten hoe ze zijn</p>
                    </div>

                    <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                
                    <div class="formulier-rij-recensies">
                        <p>Bericht van de recensie:</p>
                        <textarea id="bericht-recensies-edit" name="bericht-recensies-edit"><?= htmlspecialchars($bericht) ?></textarea>
                        <br>
                    </div>
                    
                    <div class="formulier-rij-recensies">
                        <p>schrijver/bedenker van recensie:</p>
                        <input type="text" id="schrijver-recensies-edit" name="schrijver-recensies-edit" value="<?= htmlspecialchars($schrijver) ?>">
                        <br>
                    </div>

                    <div class="formulier-rij-recensies">
                        <p>Id: <?php echo $id ?></p>
                    </div>
                    
                    
                    <button type="submit" class="opslaan" name="submit">Opslaan</button>
                </div>  
                
            </form>
        </div>
    </div>

    <?php
    include("includes/footer.php");
    ?>
    
    </body>

</html>
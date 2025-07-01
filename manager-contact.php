<?php
    include("includes/header.php");
    include("includes/connection.php");
?>

    <div id='achtergrondManager'>
        <div id='managerBox'>

            <?php
                try{
                    $stmt = $conn->prepare("SELECT id, email, telefoonnummer, opmerking FROM contact ORDER BY id DESC");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                    echo "<div class='contactManagerVakjes'>
                        <div id='emailManagerContact'><p>E-mail: {$v['email']}</p></div>
                        <div id='telefoonnummerManagerContact'><p>telefoonnummer: {$v['telefoonnummer']}</p></div>
                        <div id='opmerkingManagerContact'><p>Bericht: {$v['opmerking']}</p></div>
                    </div>";
                }
                } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
                }

            ?>
        </div>

    </div>

</body>
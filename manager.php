<?php
    include("includes/header.php");
    include("includes/connection.php");
?>

<body>

    <div id='achtergrondManager'>
        <div id='managerBox'>

            <?php
                try{
                    $stmt = $conn->prepare("SELECT id, bericht, schrijver FROM reccensies ORDER BY id DESC");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                    echo "<div class='RecensiesManagerVakjes'>
                        <div id='RecensiesBericht'><p>{$v['bericht']}</p></div>
                        <div id='RecensiesSchrijver'><p>{$v['schrijver']}</p></div>
                    </div>";
                }
                } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
                }

            ?>
        </div>

        <div id='managerBox'>

            <?php
                try{
                    $stmt = $conn->prepare("SELECT id, email, telefoonnummer, opmerking FROM contact ORDER BY id DESC");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                    echo "<div class='RecensiesManagerVakjes'>
                        <div id='emailOverzicht'><p>{$v['email']}</p></div>
                        <div id='telefoonnummerOverzicht'><p>{$v['telefoonnummer']}</p></div>
                        <div id='opmerking-overzicht'><p>{$v['opmerking']}</p></div>
                    </div>";
                }
                } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
                }

            ?>

        </div>

    </div>

</body>
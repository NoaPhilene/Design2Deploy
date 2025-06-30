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
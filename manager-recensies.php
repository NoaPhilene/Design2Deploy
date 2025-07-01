<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("includes/topbarmanager.php");
?>

<body>

    <div id='achtergrondManager'>

        <a href="manager-recensiesNew.php">
            <div id="NieuweRecensieKnop">Nieuwe recensie</div>
        </a>
        
        <div id='managerBox'>

            <?php
                try{
                    $stmt = $conn->prepare("SELECT id, bericht, schrijver FROM reccensies ORDER BY id DESC");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                    echo "<div class='RecensiesManagerVakjes'>
                        <div id='RecensiesBericht'><p>{$v['bericht']}</p></div>

                        <div id='recensiesBox'>
                            <div id='RecensiesSchrijver'><p>{$v['schrijver']}</p></div>

                            <div id='deleteBox'>
                                <form action='includes/recensies-delete.php' method='POST' onsubmit=\"return confirm('Weet je zeker dat je dit wilt verwijderen?');\">
                                    <input type='hidden' name='id' value='" . htmlspecialchars($v['id']) . "'>
                                    <button type='submit' id=deleteKnop>Verwijder</button>
                                </form>
                            </div>
                        </div>

                    </div>";
                }
                } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
                }

            ?>
        </div>

    </div>

</body>

<?php
    include("includes/footer.php");
?>
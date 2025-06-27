<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("includes/topbar.php");
?>

<body>

    <div id=RecensiesTitle>
        <div id="RecensieBox">Recensies</div>
    </div>

    <div id="achtergrondRecensiesPagina">

        <?php
            try{
                $stmt = $conn->prepare("SELECT id, bericht, schrijver FROM reccensies");   
                $stmt->execute();

                
                foreach ($stmt->fetchAll() as $k => $v) {
                $bericht = htmlspecialchars($v['bericht']);
                $schrijver = htmlspecialchars($v['schrijver']);

                echo "<div class='RecensiesPaginaVakjes'>
                    <div class='RecensiesBericht'><p>$bericht</p></div>
                    <div class='RecensiesSchrijver'><p>$schrijver</p></div>
                </div>";
            }
            } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
            }

        ?>
    </div>
</body>

<?php
include("includes/footer.php");
?>
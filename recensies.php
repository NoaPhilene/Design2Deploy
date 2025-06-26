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
                echo "<div class='RecensiesPaginaVakjes'>
                <div id='RecensiesBericht'><p>{$v['bericht']}</p></div>
                <div id='RecensiesSchrijver'><p>{$v['schrijver']}</p></div>
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
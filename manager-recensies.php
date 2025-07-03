<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("includes/topbarmanager.php");
?>

<body>
    
    <?php if (isset($_GET['save']) && $_GET['save'] === 'aangepast'): ?>
        <div id="popUpMelding">
            ✅ Recensie is aangepast!
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['save']) && $_GET['save'] === 'verwijdert'): ?>
        <div id="popUpMelding">
            ✅ Recensie is verwijdert!
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['save']) && $_GET['save'] === 'toegevoegd'): ?>
        <div id="popUpMelding">
            ✅ Recensie is toegevoegd!
        </div>
    <?php endif; ?>

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
                    <a href='recensies-edit.php?id={$v['id']}'>
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
                        </a>

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

<!-- pop up melding blijft staan voor 4 sec -->
<script>
  setTimeout(function () {
    const melding = document.getElementById('popUpMelding');
    if (melding) {
      melding.style.display = 'none';
    }
  }, 4000); // verdwijnt na 4 seconden
</script>
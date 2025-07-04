<?php
    include("includes/header.php");
    include("includes/connection.php");
    include("includes/topbarmanager.php");
?>

</body>

    <?php if (isset($_GET['save']) && $_GET['save'] === 'verwijdert'): ?>
        <div id="popUpMelding">
            ✅ Recensie is verwijdert!
        </div>
    <?php endif; ?>

    <div id='achtergrondManagerContact'>
        <div id='managerBox'>

            <?php
                try{
                    $stmt = $conn->prepare("SELECT id, email, telefoonnummer, opmerking FROM contact ORDER BY id DESC");   
                    $stmt->execute();

                    foreach ($stmt->fetchAll() as $k => $v) {
                    echo "<div class='contactManagerVakjes'>

                        <a href ='mailto:{$v['email']}'><div id='emailManagerContact'>
                            <p>E-mail: {$v['email']}</p>
                        </div></a>

                        <a href='tel:{$v['telefoonnummer']}'><div id='telefoonnummerManagerContact'>
                            <p>telefoonnummer: {$v['telefoonnummer']}</p>
                        </div></a>

                        <div id='opmerkingManagerContact'>
                            <p>Bericht: {$v['opmerking']}</p>
                        </div>

                        <div id='deleteBox'>
                            <form action='includes/delete-contact.php' method='POST' onsubmit=\"return confirm('Weet je zeker dat je dit wilt verwijderen?');\">
                                <input type='hidden' name='id' value='" . htmlspecialchars($v['id']) . "'>
                                <button type='submit' id=deleteKnop>Verwijder</button>
                            </form>
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

<!-- pop up melding blijft staan voor 4 sec -->
<script>
  setTimeout(function () {
    const melding = document.getElementById('popUpMelding');
    if (melding) {
      melding.style.display = 'none';
    }
  }, 4000); // verdwijnt na 4 seconden
</script>
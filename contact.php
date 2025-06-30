<?php
include("includes/header.php");
include("includes/connection.php");
include("includes/topbar.php");
?>

<body>
<div id="backgroundcontact">
    <div id="contactbox">Contact</div>
    <div id="introtekstcontact">Ik streef ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is. Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt u contact met ons opnemen wanneer het u uitkomt. Wij zijn u graag van dienst!</div>
    
    <div id="box1">

        <form action="includes/contact-insert.php" method="POST">
            <div id="contactformulier">
            <h2>Contactformulier</h2>
                <div id="formulierinhoud">
                <div id="formnamen">
                    <div>E-mail:</div>
                    <div>Telefoonnummer:</div>
                    <div>Opmerking:</div>
                </div>
                <div id="formvelden">
                    <input type="email" name="email" required placeholder="E-mail">
                    <input type="tel" name="telefoonnummer" required placeholder="Telefoonnummer">
                    <textarea cols="26" name="opmerking" rows="4"placeholder="Opmerking"></textarea>

                    <input type="submit" value="Verstuur">
                </div>
                </div>
            </div>
        </form>
        <img src="assets/fotos/hendrik1.webp" alt="hendrik1" id="hendrikrond">
    </div>

    <div id="box2">
        <img src="assets/fotos/hendrik3.webp" alt="hendrik3" id="hendrikvierkant">

        <div id="gegevenshendrik">
            <h2>Mijn contactgegevens</h2>
            <div id="gegevensrijen">
                <div class="gegevensrij">
                    <label for="telefoon">Telefoonnummer:</label>
                    <div class="gegevensveld" id="telefoon"><a href="tel:0698765432">06 98765432</a></div>
                </div>
                <div class="gegevensrij">
                    <label for="email">E-mail:</label>
                    <div class="gegevensveld" id="email"><a href ="mailto:hendrikhogendijkhovenier@gmail.com">hendrikhogendijkhovenier@gmail.com</a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="box3">
        <div id="werkdagen">
            <h2>Werkdagen</h2>
            <div id="werktijden">
                Maandag: 7:00-16:00
                Dinsdag: 7:00-16:00
                Woensdag: 7:00-16:00
                Donderdag: 7:00-16:00
                Vrijdag: 7:00-16:00
                Zaterdag: Op afspraak
                Zondag: Gesloten
            </div>
        </div>
        <div class="google-maps">
            <div id="googlemap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23316.052174134664!2d5.165547477687677!3d52.101606201091116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c669b4272488a7%3A0xb6f7ab211abaaf5!2sAmateur%20Gardeners%20Association%20Het%20Kloosterpark!5e0!3m2!1sen!2snl!4v1750835807115!5m2!1sen!2snl"
                width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe></div>
        </div>
    </div>
    
</div>

</body>

<?php
include("includes/footer.php");
?>

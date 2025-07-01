<?php
    include("connection.php");

    $email = $_POST['contact-email'];
    $telefoonnummer = $_POST['contact-telefoonnummer'];
    $opmerking = $_POST['contact-opmerking'];

    try{

        $sql = "INSERT INTO contact (email, telefoonnummer, opmerking) 
        VALUES (:email, :telefoonnummer, :opmerking)";

        $stmt = $conn->prepare($sql);

        // koppelt de variable met een $ aan de variable voor in sql met :
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefoonnummer', $telefoonnummer);
        $stmt->bindParam(':opmerking', $opmerking);

        // voert het stukje sql code uit
        $stmt->execute();

        header("Location: ../contact.php?save=succes");
        exit();


    } catch (PDOException $e) {
        echo "Fout bij invoegen: " . $e->getMessage();
    }
?>
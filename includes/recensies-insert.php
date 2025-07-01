<?php

    include("connection.php");

    $bericht = $_POST['bericht-recensies'];
    $schrijver = $_POST['schrijver-recensies'];

    try{

        $sql = "INSERT INTO reccensies (bericht, schrijver) 
        VALUES (:bericht, :schrijver)";

        $stmt = $conn->prepare($sql);

        // koppelt de variable met een $ aan de variable voor in sql met :
        $stmt->bindParam(':bericht', $bericht);
        $stmt->bindParam(':schrijver', $schrijver);

        // voert het stukje sql code uit
        $stmt->execute();

        header("Location: ../manager-recensies.php?save=succes");
        exit();


    } catch (PDOException $e) {
        echo "Fout bij invoegen: " . $e->getMessage();
    }
?>
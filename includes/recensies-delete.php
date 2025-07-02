<?php
    include("connection.php");

    $id =$_POST['id'];

    try{

        $sql = "DELETE FROM `reccensies` WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // koppelt de variable met een $ aan de variable voor in sql met :
        $stmt->bindParam(':id', $id);

        // voert het stukje sql code uit
        $stmt->execute();

        header("Location: ../manager-recensies.php?save=verwijdert");
        exit();


    } catch (PDOException $e) {
        echo "Fout bij invoegen: " . $e->getMessage();
    }
?>
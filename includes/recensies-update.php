<?php
    include("connection.php");

    $id =$_POST['id'];
    $bericht = $_POST['bericht-recensies-edit'];
    $schrijver = $_POST['schrijver-recensies-edit'];

    try{

        $sql = "UPDATE `reccensies` SET 
        bericht=:bericht,
        schrijver=:schrijver
        WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // koppelt de variable met een $ aan de variable voor in sql met :

        $stmt->bindParam(':id', $id);
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
<?php
include("connexion.php");

if(isset($_POST['sub'])){
    $nom_module = $_POST['nom_module'];
    $nom_filiere = $_POST['nom_filiere'];
    $nom_prof = $_POST['prof'];


    $requette = "INSERT INTO `module`(`nom_module`, `filiere`, `prof`) VALUES ('$nom_module','$nom_filiere','$nom_prof')";
    $resultat = mysqli_query($link, $requette);
    header('location: list_module.php');

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
<style type="text/css">
   label {
  width: 110px;
  display: inline-block;
  margin: 6px;
}
</style>
</head>
<body>
<form  method="POST" enctype="multipart/form-data"  action="" >
            
            <label for="pass">Nouveau Mot De Passe</label> 
            <input type="text" name="passe" required> <br><br>
            
            <input type="submit" name="enregistrer" value="Enregistrer" class="submit">
            
            
        </form>
</body>
</html>



<?php
include ("connexion.php");
session_start();

if (isset($_POST['enregistrer'])) {
    $pass = $_POST["pass"];

    $sql = "UPDATE `gerant` SET `pass`='$pass' where";
    $res = mysqli_query($link, $sql);

}



?>
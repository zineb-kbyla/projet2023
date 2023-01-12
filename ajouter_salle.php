<?php
include("connexion.php");

if(isset($_POST['sub'])){
    $nom_salle = $_POST['nom_salle'];
   

    $requette = "INSERT INTO `salle`(`nom_salle`) VALUES ('$nom_salle')";
    $resultat = mysqli_query($link, $requette);
    header('location: list_salle.php');

}

?>


<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ajouter les salles</title>
    
 
<style>
    #monform{
        width: 50%;
        margin: auto;
        margin-top: 25vh;
    }
    #monform input, #monform select{
        display: block;
        width: 90%;
        height: 30px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid orange;
        padding: 5px;
    }
    
</style>
</head>
<body>

    <form action="" method="POST" id="monform" enctype="multipart/form.data">
      
        <label for="nom_salle"> Nom salle:</label>
        <input type="text" name="nom_salle" required="required"/>

        <input type="submit" name="sub" value="Ajouter">

    </form>
	        </select><br><br>

    </form>

</body>
</html>
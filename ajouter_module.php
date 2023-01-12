<?php
include("connexion.php");

if(isset($_POST['sub'])){
    $nom_module=$_POST['nom_module'];
    $nom_filiere=$_POST['nom_filiere'];
    $nom_prof=$_POST['prof'];


    $requette="INSERT INTO `module`(`nom_module`,`filiere`,`prof`) VALUES ('$nom_module','$nom_filiere','$nom_prof')";
    $resultat=mysqli_query($link, $requette);
    
    header("location: list_module.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ajouter un enseignant</title>
    

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
      
        <label for="nom_module"> Nom module:</label>
        <input type="text" name="nom_module" required="required"/>

        <label for="nom_filiere">Filière :</label>
        <select name="nom_filiere">
	    <?php
            include("connexion.php");
            $sql="SELECT * FROM `filiere`";
            $res= mysqli_query($link, $sql);
            while($data=mysqli_fetch_assoc($res)){
            $id_filiere=$data['id_filiere'];
            $filiere = $data['nom_filiere'];

            echo "<option value=".$id_filiere.">$filiere</option>";
		    }
		?>
	    </select>

        <label for="prof">enseigné par :</label>
        <select name="prof">
	    <?php
            include("connexion.php");
            $sql="SELECT * FROM `prof`";
            $res= mysqli_query($link, $sql);
            while($data=mysqli_fetch_assoc($res)){
            $prof = $data['id_prof'];
            $nom = $data['nom'];
            echo "<option value=".$prof.">$nom</option>";
		    }
		?>
	    </select>

        <input type="submit" name="sub" value="Ajouter">

    </form>
	        </select><br><br>

    </form>

</body>
</html>


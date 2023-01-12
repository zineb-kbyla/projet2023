<?php
include("connexion.php");

if(isset($_POST['sub'])){
    $prof=$_POST['prof'];
    $module=$_POST['module'];
    $heure=$_POST['heure'];
    $jour=$_POST['jour'];


    $requette="INSERT INTO `ratt`(`prof`, `module`, `heure`, `jour`) 
                VALUES ('$prof','$module','$heure','$jour')";
    $resultat=mysqli_query($link, $requette);
    
    header("location: list_ratt.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ajouter une séance de rattrapage</title>
    

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
      
        
        

        <label for="prof"> Enseignant :</label>
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

        <label for="module"> Module :</label>
        <select name="module">
	    <?php
            include("connexion.php");
            $sql="SELECT * FROM `module`";
            $res= mysqli_query($link, $sql);
            while($data=mysqli_fetch_assoc($res)){
            $module = $data['nom_module'];
            echo "<option value=".$module.">$module</option>";
		    }
		?>
	    </select>


        <label for="heure">Heure du rattrapage :</label>
        <select name="heure">
	    <?php
            include("connexion.php");
            $sql="SELECT * FROM `heure_seance`";
            $res= mysqli_query($link, $sql);
            while($data=mysqli_fetch_assoc($res)){
            $heure = $data['id_heure'];
            echo "<option value=".$heure.">$heure</option>";
		    }
		?>
	    </select>

        <label for="jour">Jour du rattrapage :</label>
        <select name="jour">
	    <?php
            include("connexion.php");
            $sql="SELECT * FROM `emploi_du_temp`";
            $res= mysqli_query($link, $sql);
            while($data=mysqli_fetch_assoc($res)){
            $jour = $data['jour'];
            echo "<option value=".$jour.">$jour</option>";
		    }
		?>
	    </select>

        <input type="submit" name="sub" value="Ajouter">

    </form>
	        </select><br><br>

    </form>

</body>
</html>
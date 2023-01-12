<?php
include("connexion.php");

if(isset($_POST['sub'])){
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];

    if(isset($_FILES['fichier']) and $_FILES['fichier']['error']==0)
    {
        $dossier = 'photo/';
        $temp_name = $_FILES['fichier']['tmp_name'];
        if(!is_uploaded_file($temp_name))
        {
            exit("le fichier est untrouvale");
        }
        if($_FILES['fichier']['size'] >= 1000000){
            exit("Erreur, le fichier est volumieux");
        }

        $infosfichier = pathinfo($_FILES['fichier']['name']);
        $extension_upload = $infosfichier['extension'];

        $extension_upload = strtolower($extension_upload);
        $extensions_autorisees == array('png', 'jpeg', 'jpg');
        if(!in_array($extension_upload, $extensions_autorisees))
        {
            exit("Erreur, Veuillez insere une image svp (extensions autorisées: png)");
        }
        $nom_photo = $id_prof . "." . $extension_upload;
        if(!move_uploaded_file($temp_name, $dossier.$nom_photo))
        {
            exit("Probleme dans le telechargement de l'image, Ressayez");
        } else {
            $ph_name = $nom_photo;
        }
    }
    else{
        $ph_name = "SANS_IMAGE.png";
    }

    $requette = "INSERT INTO `prof`(`login`, `pass`, `nom`, `prenom`, `email`, `photo`) 
    VALUES ('$login','$pass','$nom','$prenom','$ph_name')";
    $resultat = mysqli_query($link, $requette);
    header('location: list_prof.php');

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
      

        <label for="login">Login :</label>
        <input type="text" name="login" required="required"/>

        <label for="pass">Password :</label>
        <input type="text" name="pass" required="required"/>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required="required"/>

        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" required="required"/>

        <label for="mail">E-mail :</label>
        <input type="email" name="mail" required="required"/>

        <label for="fichier">photo :</label>
        <input type="file" name="fichier"/>

        <input type="submit" name="sub" value="Ajouter">

    </form>
	        </select><br><br>

    </form>

</body>
</html>
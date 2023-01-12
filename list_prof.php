<!DOCTYPE html>
<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>liste des enseignant</title>
        
          <style>
            a{
                background-color: gray;
                margin: 15px;
                padding: 0.5%;
                text-decoration: none;
                color: white;
                border-radius: 10px;
            }
            h2{
                text-align: center;
            }
            body{
                margin-top: 10vh;
            }
       </style>
        
    </head>
    <body>
        <h2>Liste des profs de l'ENSA</h2></br></br>
        <table  class="table" >
        <thead>
            <tr>
                <th scope="col">Numéro prof</th>
                <th scope="col">Login</th>
                <th scope="col">Password</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connexion.php');
            $requette = "SELECT * FROM `prof`";
            $resultat = mysqli_query($link, $requette);
            while($data = mysqli_fetch_assoc($resultat)){
                $id_prof = $data['id_prof'];
                $login = $data['login'];
                $pass = $data['pass'];
                $nom = $data['nom'];
                $prenom = $data['prenom'];
                $email = $data['email'];
                $photo = $data['photo'];
                if($id_prof !="" and $login!="" and $pass!="" and  $nom!="" and  $prenom!="" and  $email!="" and  $photo!=""){
                    echo "<tr>";
                    echo "<td scope="."row".">$id_prof</td>";
                    echo "<td>$login</td>";
                    echo "<td>$pass</td>";
                    echo "<td>$nom</td>";
                    echo "<td>$prenom</td>";
                    echo "<td>$email</td>";
                    echo "<td>";
                    echo "<img src=\"photo/$photo\" alt=\"image\" height=40>";
                    echo "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
        </table>
        </br></br></br>
        <a href="ajouter_prof.php">Ajouter un prof</a></br></br></br>
        <a href="modifier_gerant.php">Retour à la page de gestion</a>
    </body>
    <?php mysqli_close($link); ?>
</html>
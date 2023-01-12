<!DOCTYPE html>
<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>liste des filières</title>
        
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
        <h2>liste des filières à l'ENSA-K</h2></br></br>
        <table  class="table" >
        <thead>
            <tr>
                <th scope="col">Id filière</th>
                <th scope="col">Nom filière</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connexion.php');
            $requette = "SELECT * FROM `filiere`";
            $resultat = mysqli_query($link, $requette);
            while($data = mysqli_fetch_assoc($resultat)){
                $id_filiere = $data['id_filiere'];
                $nom_filiere = $data['nom_filiere'];
                
                if($id_filiere !="" and $nom_filiere!=""){
                    echo "<tr>";
                        echo "<td scope="."row".">$id_filiere</td>";
                        echo "<td>$nom_filiere</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
        </table>
        </br></br></br>
        <a href="ajouter_filiere.php">Ajouter filière</a></br></br></br>
        <a href="modifier_gerant.php">Retour à la page de gestion</a>
    </body>
    <?php mysqli_close($link); ?>
</html>
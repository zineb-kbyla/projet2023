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
        <h2>liste des semestres</h2>
        <table  class="table" >
        <thead>
            <tr>
                <th scope="col">Nom Semestre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connexion.php');
            $requette = "SELECT * FROM `semestre`";
            $resultat = mysqli_query($link, $requette);
            while($data = mysqli_fetch_assoc($resultat)){
                $nom_semestre = $data['nom_semestre'];
                
                if($nom_semestre !=""){
                    echo "<tr>";
                        echo "<td scope="."row".">$nom_semestre</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
        </table>
        </br></br></br>
        <a href="ajouter_semestre.php">Ajouter Semestre</a></br></br></br>
        <a href="modifier_gerant.php">Retour à la page de gestion</a>
    </body>
    <?php mysqli_close($link); ?>
</html>
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
    <h2>Liste des séances de rattrapage</h2></br></br>
        <table  class="table" >
        <thead>
            <tr>
                <th scope="col">Id ratt</th>
                <th scope="col">prof</th>
                <th scope="col">Module</th>
                <th scope="col">heure de la séance</th>
                <th scope="col">jour de la séance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connexion.php');
            $requette = "SELECT * FROM `ratt`";
            $resultat = mysqli_query($link, $requette);
            while($data = mysqli_fetch_assoc($resultat)){
                $id_ratt = $data['id_ratt'];
                $prof = $data['prof'];
                $module = $data['module'];
                $heure = $data['heure'];
                $jour = $data['jour'];
                
                if($id_ratt !="" and $prof!="" and $module!="" and  $heure!="" ){
                    echo "<tr>";
                    echo "<th scope="."row".">$id_ratt</th>";
                    echo "<td>$prof</td>";
                    echo "<td>$module</td>";
                    echo "<td>$heure</td>";
                    echo "<td>$jour</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
        </table>
        
    </body>
    <?php mysqli_close($link); ?>
</html>
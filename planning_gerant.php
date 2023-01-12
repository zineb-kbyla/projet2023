<!DOCTYPE html>
<html>
    <head>
        <title>Système de gestion des emplois du temps</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <style>
            body{
                
                align-items: center;
            }
            a{
              text-decoration: none;
              color: black;
            }
            #deco{
              text-decoration: solid;
              
              color: black;
              background-color: white;
              width: 25%;
              margin: auto;
              padding: 1%;
              margin-top: 15vh;
              border-radius: 15px;
            }
            .table{
                margin-top: 10vh;
            }
            
            
        </style>
    </head>
    <body>

    <table  class="table" >
        <thead>
            <tr>
                <th scope="col">jour/heure</th>
                <th scope="col">de 8h à 10h</th>
                <th scope="col">de 10h à 12h</th>
                <th scope="col">de 14h à 16</th>
                <th scope="col">de 16h à 18h</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include('connexion.php');
            $requette = "SELECT * FROM `emploi_du_temp`";
            $resultat = mysqli_query($link, $requette);
            while($data = mysqli_fetch_assoc($resultat)){

                $jour = $data['jour'];
                $seance1 = $data['8-->10'];
                $seance2 = $data['10-->12'];
                $seance3 = $data['14-->16'];
                $seance4 = $data['16-->18'];
                
              
                    echo "<tr>";
                    echo "<th scope="."row".">$jour</th>";
                    echo "<td>$seance1</td>";
                    echo "<td>$seance2</td>";
                    echo "<td>$seance3</td>";
                    echo "<td>$seance4</td>";
                    
                    echo "</tr>";
                }
            

            ?>
        </tbody>
        </table>

<form id="deco">
<ul>
    <li><a href="mofifier_planning.php" >Modifier le planning</a></li></br></br>
    
    <li><a href="index.php" >Déconnexion du système de gestion </a></li>
</ul>
</form>
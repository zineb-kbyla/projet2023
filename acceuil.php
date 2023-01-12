<!DOCTYPE html>
<html>
    <head>
        <title>Système de gestion des emplois du temps</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #D5F3FE;
                align-items: center;
            }
            a{
              text-decoration: none;
              color: black;
              
                margin: 15px;
                padding: 0.5%;
                text-decoration: none;
                color: white;
                border-radius: 10px;
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
            h2{
                text-align: center;
            }
            h1{
                text-align: center;
            }
            h3{
                text-align: center;
            }

            table{
      margin: auto;
      width: 100%;
      text-align: left;
      width: 70%;
  }

  td , th {
    border-bottom: 1px solid black;
    padding: 8px;
    border-bottom-style: solid;
    border-bottom-width: 2px;

  }

        </style>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Accueil Planning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="#planning">Planning</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#bord">Table de bord</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">Se connecter en tant que profil administratif  </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="login_prof.php">Se connecter en tant que profil enseignant </a>
      </li>
      
      


    </ul>
  </div>
</nav>
</br></br></br>
<h1>Ecole Nationnale Des Sciences Appliqués</h1>
<h1>المدرسة الوطنية للعلوم التطبيقية</h1></br></br>
<h3>Si vous êtes Ensakistes, consultez votre emploi du temps</h3>
        </br></br>

<a name="planning">
   <h2>Emploi du temps</h2> </br>
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


            </br></br></br>
<a name="bord">
<h2>Table de bord</h2></br></br>

    <h3>Taux d’occupation des salles</h3></br>
    <table>
        <tr>
          <th>Batiments</th>
          <td>batiment_A</td>
          <td>batiment_B</td>
          <td>batiment_C</td>
          <td>Les amphis</td>
        </tr>
        <tr>
            <th>taux d'occupation des salles par batiment</th>
            <td>30% remplis</td>
            <td>60% remplis</td>
            <td>95% remplis</td>
            <td>80% remplis</td>
        </tr>
    </table>
    </br></br>
    <h3>Charge horaire par filière</h3></br>
    <table>
        <tr>
          <th>Filières</th>
          <td>CP1</td>
          <td>CP2</td>
          <td>Génie-INFO</td>
          <td>Génie-INDUS</td>
          <td>Génie-MECA</td>
          <td>GE</td>
          <td>RST</td>
        </tr>
        <tr>
            <th>Charge horaire/Semestre</th>
            <td>400 h</td>
            <td>400 h</td>
            <td>420 h</td>
            <td>420 h</td>
            <td>432 h</td>
            <td>480 h</td>
            <td>420 h</td>
        </tr>
    </table>







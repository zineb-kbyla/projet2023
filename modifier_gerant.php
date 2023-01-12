<!DOCTYPE html>
<html>
    <head>
        <title>Système de gestion des emplois du temps</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: aquamarine;
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
            
            
            
        </style>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Administration ENSA-K</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list_prof.php">Liste des enseignants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_module.php">Liste des modules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_salle.php">Listes des salles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_semestre.php">Listes des semestres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_filiere.php">Listes des filières</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_ratt_gerant.php">Listes des rattrapages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="planning_gerant.php">Planning</a>
      </li>
      
     
    </ul>
  </div>
</nav>

<form id="deco">
<ul>
    <li><a href="ajouter_prof.php" >Ajouter un nouveau enseignant</a></li></br></br>
    <li><a href="ajouter_module.php" >Ajouter un nouveau module </a></li></br></br>
    <li><a href="ajouter_salle.php" >Ajouter une nouvelle salle </a></li></br></br>
    <li><a href="ajouter_semestre.php" >Ajouter une semestre</a></li></br></br>
    <li><a href="ajouter_filiere.php" >Ajouter une nouvelle filière </a> </li>  </br></br>
    <li><a href="index.php" >Déconnexion du système de gestion </a></li>
</ul>
</form>

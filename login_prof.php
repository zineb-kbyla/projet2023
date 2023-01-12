<!DOCTYPE html>
<html>
    <head>
        <title>Système de gestion de la bibliothèque d'ENSA de Kénitra</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <style>
            body{
                background-image: url("biblio.jpg");
            }
        </style>
    </head>
    <body>

     
<form action="trait_login_prof.php" method="POST">
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5" >LOGIN</h3>
            
            <div class="form-outline mb-4">
            <label  class="form-label" for="typeEmailX-2">Login</label>
              <input name="typeEmailX-2" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
              
            </div>


            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" name="typePasswordX-2" id="typePasswordX-2" class="form-control form-control-lg" />
              
            </div>

     <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

          </div>
        </div>
      </div>
    </div>
          </form>
<?php  session_start();

if(isset($_SESSION['id'])){

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="utf-8">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
  <title>LISTE DES CANDIDATS</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ELECTION DU SENEGAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">ACCUEIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-admin/listeCandidat.php#">LISTE DES CANDIDATS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-admin/listeelecteur.php#">LISTE DES ELECTEURS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-admin/listeVote.php#">LISTE DES VOTANTS</a>
      </li>
      <li class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-admin/ajoutCandidat.php#">AJOUTE CANDIDATS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-admin/resultat.php#">RESULTATS</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success text-white my-2 my-sm-0 " ><a href="http://localhost/Election/destroy.php#" class="text-white">DECONNECTER</a></button>
    </form>
  </div>
</nav>

    <div class="container">
<?php

include '../modele.php';
$model = new Election();
$insert = $model->ajoutCandidat()

?>


  <div class="row justify-content-center">
    <div class="card shadow-lg p-2 mb-5 bg-white rounded" style="width: 60rem;">
         <div class="card-body register-card-body">
            <h1 class="login-box-msg text-center">Ajoute Candiddat</h1>
            <div class="text-center">
            <img src="images/candidat.png" class="p-1" width="180px" height="180px">
          </div>
    <div class="card-body">
    <form method="POST">
         
        <div class="form-group">
        <label for="">Nom Candiddat</label>
          <input type="text" name="nom_candidat" class="form-control" >
        </div>

        <div class="form-group">
        <label for="">Prenom Candiddat</label>
          <input type="text" name="prenom_candidat" class="form-control" >
        </div>

        <div class="form-group">
        <label for="">Nom Partie</label>
          <input type="text" name="nom_partie" class="form-control" >
        </div>
        
        <div class="form-group">
        <label for="">profession</label>
          <input type="text" name="photo" size=50  class="form-control">
        </div>
        <div class="form-group">
        <label for="">Matricule</label>
          <input type="text" name="matricule"  class="form-control">
        </div>

       
        <div class="form-group mt-3">
           <input type="submit" name="submit" value="ENREGISTRER"class="form-control">
        </div>
      </form>
  </div>
  </div>
</div>
<?php
}else{
  header('Location: http://localhost/Election//authentifi_admin.php');
}
?>
</body>
</html>

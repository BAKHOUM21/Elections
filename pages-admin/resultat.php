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

<div class="container class="mt-5">
<h1 class="text-center mt-5">Resultat des votes  </h1>

<?php
     include '../modele.php';
      $model = new Election();
      $rows = $model->listeVote();
      $electeur = $model->listeElecteur();
      $i= 1;
      if(!empty($rows)){
    //    foreach($rows as $row){
         ?>
    <h4>Nombre des inscrits : <?php echo count($electeur); ?></h4>
    <h4>Nombre des votants : <?php echo count($rows); ?></h4>



    <?php
        }
    //    }
      ?>
  <?php

   
    $row = $model->id6();
    $rowv = $model->id6V();
    if(!empty($row) and !empty($rowv)){

    ?>
    <div class="card">
    <div class="card-header">
    resultats
    </div>
    <div class="card-body">

    <p><?php echo $row['prenom_candidat']; ?> <?php echo $row['nom_candidat']; ?> a <?php echo count($rowv); ?> voix</p>
   
    <?php
    $row = $model->id7();
    $rowv = $model->id7V();
    if(!empty($row) and !empty($rowv)){
    ?>
    <p><?php echo $row['prenom_candidat']; ?> <?php echo $row['nom_candidat']; ?> a <?php echo count($rowv); ?> voix</p>
    <?php
    $row = $model->id9();
    $rowv = $model->id9V();
    if(!empty($row) and !empty($rowv)){
    ?>
    <p><?php echo $row['prenom_candidat']; ?> <?php echo $row['nom_candidat']; ?> a <?php echo count($rowv); ?> voix</p>

    <?php
    $row = $model->id10();
    $rowv = $model->id10V();
    if(!empty($row) and !empty($rowv)){
    ?>
    <p><?php echo $row['prenom_candidat']; ?> <?php echo $row['nom_candidat']; ?> a <?php echo count($rowv); ?> voix</p>
    <?php
    $row = $model->id13();
    $rowv = $model->id13V();
    if(!empty($row) and !empty($rowv)){
    ?>
    <p><?php echo $row['prenom_candidat']; ?> <?php echo $row['nom_candidat']; ?> a <?php echo count($rowv); ?> voix</p>




    </div>
    </div>
    <?php
    }else{
    echo "no data";
    }
    }
  }
}
}
?>
             

</div>

<?php
}else{
  header('Location: http://localhost/Election//authentifi_admin.php');
}


?>
</body>
</html>
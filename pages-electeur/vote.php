<?php
session_start();  
$idele = $_SESSION['id_electeur'];  
if(isset($idele)){
$nom = $_SESSION['nomelecteur'];
$prenom = $_SESSION['prenomelecteur'];
$idele = $_SESSION['id_electeur'];
$commune =$_SESSION['commune'];
$bureau = $_SESSION['bureau'];

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELECTION PRESIDENTIEL DU SENEGAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ELECTION DU SENEGAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Election/">ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Election/pages-electeur/inscrire.php">INSCRIPTION</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0 " ><a href="http://localhost/Election/destroy.php" class="text-white">DECONNECTER</a></button>
    </form>
  </div>
</nav>
<div class="container">

    <h1 class="text-center">ELECTION PRESIDENTIEL DU SENEGAL</h1>
    <form action="" method="post">
    <?php

    ?>

    <p>Id electeur : <?php echo $idele ?></p>
    <p>Nom : <?php echo strtoupper($nom) ?></p>
    <p>prenom : <?php echo strtoupper($prenom) ?></p>
    <p>Commune : <?php echo strtoupper($commune) ?></p>
    <p>Bureau : <?php echo strtoupper($bureau) ?></p>
    <h2 class="text-center">Selectionnez le candidat pour qui vous votez</h2>
        <?php
       
        include '../modele.php';
        $model = new Election();
        $rows = $model->listeCandidat();
        $vote = $model->vote();
        $i= 1;
        if(!empty($rows)){
            foreach($rows as $row){

        ?>


        <input type="radio" name="id_candidat" value="<?php echo $row['id_candidat'];?>">
        <label for=""><?php echo strtoupper($row['prenom_candidat']);?>  <?php echo strtoupper($row['nom_candidat']);?></label><br>
       
    <?php
         }
        }
    ?>


     
        <input class="text-center" type="submit" name="submit" value="Votez">        
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  <?php
}else{
  header('Location: http://localhost/Election/index.php');
}


?>
</body>
</html>

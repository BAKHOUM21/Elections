<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELECTION PRESIDENTIEL DU SENEGAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
        include '../modele.php';
        $model = new Election();
        $authentication = $model->verify();

        ?>

<div class="row justify-content-center p-5">
      <div class="card shadow-lg p-2 mb-5 bg-white rounded" style="width: 40rem;">
         <div class="card-body register-card-body">
            <h1 class="login-box-msg text-center">Connexion Electeur</h1>
            <div class="text-center">
            <img src="images/resistre.png" class="p-1" width="180px" height="180px">
          </div>
            <div class="card-body">
    <form method="POST">
         
        <div class="form-group">
        <label for="">Num electeur</label>
          <input type="number" name="numelecteur" class="form-control" value="<?php $numelecteur ?>" />
        </div>
        
        <div class="form-group">
        <label for="">Mot de passe</label>
          <input type="password" name="mdp"  class="form-control">
        </div>

       
        <div class="form-group mt-3">
           <input type="submit" name="submit" value="ENREGISTRER" class="form-control btn-primary">
           <p class="mt-5">Si vous n étes pas inscrire taper   <a href="inscrire.php"> inscrire</a></p>
        </div>
      </form>
  </div>
  </div>
  </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELECTION PRESIDENTIEL DU SENEGAL</title>
  <meta charset="utf-8">
 
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
        <a class="nav-link" href="http://election/">ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://vote/Admin_Electeur/pages-electeur/inscrire.php">INSCRIPTION</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0 " href="http://vote/Admin_Electeur/authentifi_admin.php"><a href="http://vote/Admin_Electeur/authentifi_admin.php" class="text-white">CONNECTER</a></button>
    </form>
  </div>
</nav>



<?php
  include_once 'config.php';
  $query = "SELECT * FROM country Order by country_name";
  $result = $db->query($query);
?>
<div class="container">
    <?php

        include '../modele.php';
        $model = new Election();
        $insert = $model->inscrire();

        ?>

<div class="row justify-content-center">
      <div class="card shadow-lg p-2 mb-5 bg-white rounded" style="width: 60rem;">
         <div class="card-body register-card-body">
            <h1 class="login-box-msg text-center">Inscription Electeur</h1>
            <div class="text-center">
            <img src="images/resistre.png" class="p-1" width="180px" height="180px">
          </div>
            <div class="card-body">
    <form method="POST">
         <div class="form-group">
        <label for="">Num electeur</label>
          <input type="number" name="numelecteur" class="form-control">
        </div>
        <div class="form-group">
        <label for="">CNI electeur</label>
          <input type="number" name="cni" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nom</label>
          <input type="text" name="nomelecteur" class="form-control">
        </div>

        <div class="form-group">
        <label for="">Prenom</label>
          <input type="text" name="prenomelecteur" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Prenom du pére</label>
          <input type="text" name="nompere" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nom du mére</label>
          <input type="text" name="nommere" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Date de naissance</label>
          <input type="date" name="datenaissance" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Lieu de naissance</label>
          <input type="text" name="lieunais" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Mot de passe</label>
          <input type="password" name="mdp"  class="form-control">
        </div>

        <div class="form-group">
          <label for="">Département</label>
          <select name="departement" id="country" class="form-control" onchange="FetchState(this.value)"  required>
            <option value="">Select Département</option>
          <?php
            if ($result->num_rows > 0 ) {
               while ($row = $result->fetch_assoc()) {
                echo '<option value='.$row['id'].'>'.$row['country_name'].'</option>';
               }
            }
          ?> 
          </select>
        </div>
        <div class="form-group">
          <label for="">Arrodissement</label>
          <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
            <option>Selection arrodissement</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Commune</label>
          <select name="city" id="city" class="form-control">
            <option>Selection commune</option>
          </select>
        </div>

        <div class="form-group">
            <label for="">Bureau de vote</label>
            <select name="bureau" id="bureau" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
        </div>
        
        <div class="form-group mt-3">
           <input type="submit" name="submit" value="ENREGISTRER" class="form-control btn-primary">
        </div>
      </form>
          </div>
      </div>
  </div>
  </div>
</div>
<script type="text/javascript">
  function FetchState(id){
    $('#state').html('');
    $('#city').html('<option>Select City</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { country_id : id},
      success : function(data){
         $('#state').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { state_id : id},
      success : function(data){
         $('#city').html(data);
      }

    })
  }
  

  
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

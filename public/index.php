<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>



  <div class="container">
    <h1>
      <button class="btn btn-primary" id="btnNew">New FOAD</button>
    </h1>

    <div class="row">
      <div class="col-6">
        <label for="nomprenom">Nom/Prénom du stagiaire :</label> <br />
        <input type="text" class="form-control" placeholder="Nom/Prénom du stagiaire" id="nomprenom" required>
      </div>

      <div class="col-6">
        <label for="date">Semaine du</label>
        <input type="date" id="date" class="form-control" required>
      </div>

      
      
    </div>

    <hr>


<?php
$weekdays=['Lundi','Mardi','Mercredi','Jeudi','Vendredi'];

foreach($weekdays as $weekday){
  
  $htm ='<div class="row">';
  $htm.='<h2>'.$weekday.'</h2>';
  $htm.='<div class="col-9">';
  $htm.='<label for="">Tâches demandées</label>';
  $htm.='<textarea name="" id="" class="form-control" placeholder="Taches" rows="4"></textarea>';
  $htm.='</div>';
    
  $htm.='<div class="col-3">';
  $htm.='<label for="">Modalité de travail</label>';
  $htm.='<textarea name="" id="" class="form-control" placeholder="Modalitees" rows="4"></textarea>';
  $htm.='</div>';
      
  $htm.='</div>';
  echo $htm;
}
?>
    
    

    <hr>
    <button class="btn btn-primary">Download pdf</button>


  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="app.js" type="module"></script>
</body>

</html>

<?php
if(isset($_POST['calcul'])){

  $nbr1=$_POST['x'];
  $nbr2=$_POST['y'];
  $operarion=$_POST['ope'];


  switch($operarion){
    case "addition":
      $resu=$nbr1+$nbr2;
      break;
    case "soustraction":
      $resu=$nbr1-$nbr2;
      break;
    case "multiplication":
      $resu=$nbr1*$nbr2;
      break;
    case "division":
      if($nbr2!=0){
      $resu=$nbr1/$nbr2;
      }
      else{
        $resu="choisir un nombre different de zero";
      }

      break;
    default:
      $resu="veuillez choisir une operation valide";
      break;
      
  }
  $cp=0;
  $smd=0;
  if(is_int($resu)){
    if($resu%2==0){
      $p= "et est nombre paire";
    }
    else{
      $p= "n'est pas un nombre paire";
    }

    for($i=0;$i<=$resu;$i++){
      if($i%2==0){
        $cp+=1;
        $smd=$smd+$i;
      }

  }
  if($cp==2){
    $np="ce nombre est premier ";
  }
  elseif($cp !=2){
    $np="ce nombre n'est pas premier ";
  }

  if($resu==$smd - $resu){
    $npa="ce nombre est parfait ";
  }
  else{
    $npa="ce nombre est pas parfait ";
  }
  }

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projet_Calculatrice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

</head>
<body id="body">

  <div id="login-card" class="card">
      <div class="card-body">
        <h2 class="text-center">Calculatrice</h2>
        <br>
        <form action="index.php" method="POST">
          <div class="form-group">
            <input type="number" required class="form-control" id="email" placeholder="Saisir le premier nombre" value='<?php if(isset($_POST['calcul'])){ echo $nbr1;} ?>' name="x">
          </div>
          <select id="pet-select" class="form-group" value='' name="ope" required>
            <option value="" ><?php if(isset($_POST['calcul'])){ echo $operarion;} ?></option>
            <option value="addition">addition(+)</option>
            <option value="multiplication">multiplication(*)</option>
            <option value="soustraction">soustraction(-)</option>
            <option value="division">division(/)</option>
        
          </select>
          <div class="form-group">
            <input type="number" class="form-control" required id="email" placeholder="Saisir le second nombre" value='<?php if(isset($_POST['calcul'])){ echo $nbr2;} ?>' name="y">
          </div>
          <button type="submit" id="button" class="btn btn-primary deep-purple btn-block " name="calcul">Calculer</button>
          
      <br>
          <br>
          <div class="form-group">
            <input type="texte" class="form-control"  id="email" disabled='disabled' placeholder="Resultat" value='<?php if(isset($_POST['calcul'])){ echo $resu;} ?>' name="r">
          </div>
        
          

        </form>
        <?php if(isset($_POST['calcul'])){ echo "-".$np. "<br> -".$npa. "<br> -" .$p ;} ?>
      </div>

      <div id="adBar">
        <marquee>Alfousseni Calculator</marquee>
      </div>
  </div>
</body>
        
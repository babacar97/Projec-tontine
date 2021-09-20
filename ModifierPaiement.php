<?php 
 $servname = 'localhost';
 $dbname = 'espacemembre';
 $user = 'root';
 $pass = '';
 
 try{
     $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 
 catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
 }

 
$modifier= $dbco->prepare('SELECT* FROM cotisation WHERE id=:num');

$modifier->bindValue(':num',$_GET['numbercotisation'], PDO::PARAM_INT);

$executeok=$modifier-> execute();

$cotisation= $modifier->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .cadre{
        border: solid 2px #0099ff;
        border-radius:60px;
        position: relative;
        height: 600px;
        width: 690px;
        right: -500px;
        top: 30px;
        background-color: white;
        }
    </style>
    <title>Document</title>
    <!--JQuery CDN-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
     <?php include("header.php"); ?>
    <div class="cadre"> <br>
        <h1>Modifications</h1>
        <div class="container"> 
            <form action="modifie.php" method="post" class="form">
                 <input type="hidden" name="numbercotisation" class="form-control"  value="<?=$cotisation['id'];?>">
               <div class="form-group">
                    <!-- <label for="Matricule">Numero cotisation</label> -->
                    <input type="hidden" name="numcotis" class="form-control" value="<?=$cotisation['numcotis'];?>" >  <br>
                </div>
                <div class="form-group">
                    <!-- <label for="Matricule">Matricule</label> -->
                    <input type="hidden" name="matricule" class="form-control" value="<?=$cotisation['matricule'];?>" >  <br>
                </div>
                <div class="form-group">
                    <!-- <label >Choisir votre moi de payment:</label> -->
                    <input type="text" name="mois"  class="form-control" value="<?=$cotisation['mois'];?>"><br>
                </div>
                <div class="form-group">
                    <!-- <label >Choisir votre motif de payment de payement:</label> -->
                    <input type="text" name="motif" class="form-control" value="<?=$cotisation['motif'];?>"><br>
                </div>
                <div class="form-group">
                    <!-- <label for="">Choisir le date</label> -->
                    <input type="date" name="date" class="form-control" class="form-control" value="<?=$cotisation['datecotis'];?>"><br>
                </div>
                <div class="form-group">
                    <!-- <label >Montant</label> -->
                    <input type="number" name="Montant" class="form-control" value="<?=$cotisation['montant'];?>"><br>  
                </div>
                <button type="submit" name="submit" class="enregistrer" >enregistrer les modifications</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script>
     $('.enregistrer').on('click',function (e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Modification reussi',
        showConfirmButton: false,
        timer: 1600
         })

    })

    </script>
</body>
</html>



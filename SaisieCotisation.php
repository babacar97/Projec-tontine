<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
          <!--JQuery CDN-->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--Sweet Alert CDN-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
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
</head>
<body>
    <?php include("header.php"); ?>
    <div class="cadre"><br><br><br><br>
        <form method="post" action="saisiecotisation.php"  class="form">
            <div class="form-group">
                 <!-- <label >matricule:</label> -->
                <input type="text" class="form-control" name="matricule" class="form-control" value="<?=$_GET['mat'];?>"/><br>
            </div>
            <div class="form-group">
                <!-- <label>mois:</label> -->
                <input type="text"  name="mois"   class="form-control" placeholder="Mois" /><br>
            </div>
            <div class="form-group"> 
                <!-- <label for="adresse">Motif</label> -->
                <input type="text" name="motif" class="form-control" placeholder="Motif"/><br>
            </div>
            <div class="form-group">
                <!-- <label >date:</label> -->
                <input type="date" name="date" class="form-control" placeholder="Date"/><br>
            </div>
            <div class="form-group">
                <!-- <label >montant:</label> -->
                <input type="number" name="Montant" class="form-control" placeholder="Montant"/><br><br>
            </div>
            <button type="submit" name="submit" class="btn-success"  data-toggle="modal" data-target="#mymodal">
                <span class="glyphicon glyphicon-save"></span>enregistre...
            </button>
        </form>
    </div>
    

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
        



        if(isset($_POST['submit'])){
            $matricule=$_POST['matricule'];
            $moiscotisation=$_POST['mois'];
            $motif=$_POST['motif'];
            $montant=$_POST['Montant'];
            $datecotisation=$_POST['date'];

        }
        $numcotisation=rand(100,1000);
        $moiscotisation=$_POST['mois'];
        // si les saisies ne sont pas vides
        if($moiscotisation != "" && $motif != "" && $montant != ""&& $datecotisation!= "" ){ 
            $ajoutcotisation= "INSERT INTO cotisation (numcotis,datecotis ,mois, motif, montant, matricule) VALUES ('$numcotisation','$datecotisation','$moiscotisation','$motif','$montant','$matricule')";
            $dbco->exec($ajoutcotisation);
        }else {
        
            echo"toute les champs sont obligatoires";
        
        }
    ?>
        <!-- <script>
    $('btn-success').on('click',function (e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Cotisation reussi',
        showConfirmButton: false,
        timer: 1700
         })

    })
    </script> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>
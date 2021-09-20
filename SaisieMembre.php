<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire de saisie utilisateur </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <!--JQuery CDN-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--Sweet Alert CDN-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body{
            background-image:url("img/sans1.png");
            margin:0;
            overflow-y: hidden; 
        }
        .capture23{
        position: relative;
        left: 922px;
        height: 452px;
        top:-624px;
        width: 242px;
        }
        .affiche{
            position: relative;
            left:330px;
            top:-490px;
        }
        .cadre{
        border: solid 2px #0099ff;
        border-radius:60px;
        position: relative;
        height: 600px;
        width: 590px;
        right: -140px;
        top: 30px;
        background-color: white;
        }
        .inscription{
            background-color:#0099ff;
            border-radius:15px;
            position: relative;
            width:150px;
            color:white;
        }
    </style>
    </head>
    <body>
        <?php include("header.php"); ?>
           <div class="cadre">
            <div class="container">  <br><br>
                <form method="post" action="saisieMembre.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="90" fill="#0099ff" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                    <div class="form-group">
                        <input type="text"  name="nom" class="form-control" placeholder="Nom"/><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="prenom" placeholder="Prenom" /><br> 
                    </div>
                    <div class="form-group"> 
                        <input type="text" name="adresse" class="form-control" placeholder="Adresse"/><br>
                    </div>
                    <div class="form-group">
                        <input type="number" name="telephone" class="form-control"  placeholder="Telephone"/><br><br>
                    </div>
                    <!-- <div class="form-group">
                        <label for="matricule">matricule:</label>
                        <input type="number" name="matricule" class="form-control" placeholder="taper la matricule"/>
                    </div> -->
                    <button type="submit" name="valider" class="form-control" ><span class="glyphicon glyphicon-save"></span>
                        enregistre...
                    </button>
                </form>
              </div>  
            </div> 
            <img src="img/capture23.png" class="capture23" >
            <img src="img/affiche.png" class="affiche" alt="">

            <?php
             if (isset($_POST['valider'])) {
                    $nom=$_POST['nom'];
                    $prenom=$_POST['prenom'];
                    $adresse=$_POST['adresse'];
                    $telephone=$_POST['telephone'];
                    } 
                    $nom=$_POST['nom'];
                    $prenom=$_POST['prenom'];
                    $adresse=$_POST['adresse'];
                    $telephone=$_POST['telephone'];
                    date_default_timezone_set('Africa/Dakar');
                    $date = date('dmyhis');
                    $matriculefinal="SN" .$date ;
          

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
        ?>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <!-- <script>
    $('.inscription').on('click',function (e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Inscription reussi',
        showConfirmButton: false,
        timer: 1600
         })

    })
    </script> -->
    </body>
</html>

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

 
$modifier= $dbco->prepare('UPDATE  cotisation set numcotis=:numcotis, datecotis=:datecotis, mois=:mois, motif=:motif, montant=:montant, matricule=:matricule  WHERE id=:num LIMIT 1');

$modifier->bindValue(':num',$_POST['numbercotisation']);
$modifier->bindValue(':numcotis',$_POST['numcotis']);
$modifier->bindValue(':datecotis',$_POST['date']);
$modifier->bindValue(':mois',$_POST['mois']);
$modifier->bindValue(':motif',$_POST['motif']);
$modifier->bindValue(':montant',$_POST['Montant']);
$modifier->bindValue(':matricule',$_POST['matricule']);

$executeOk=$modifier->execute();

if ($executeOk) {
      header('Location:listecotisation1.php'); 
    ?>


<?php 
}else {
    $message="L'echec de la mis a jour du cotisation";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultat du mise a jour</h2>
    <p><?=$message?></p>
</body>
</html>

 <!-- <div class="container">
      <div class="row">
            <div class="col-md-12">
                   <div class="modal fade" id="mymodal">
                        <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h1>Cotisation</h1>
                                    </div>
                                     <div class="modal-body">
                                     <div class="container">
                                    </div>
                                    </div>
                     
                                    <div class="modal-footer">
                                    <button  class="btn-btn-primary" data-dismiss="modal" value="close">fermer</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                        <a    >ajout cotisation</a>
             </div>
      </div>
</div> -->
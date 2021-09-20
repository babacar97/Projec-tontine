
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

    $afficher=$dbco->prepare('SELECT*FROM cotisation');

    $executeok=$afficher-> execute();

    $cotisation= $afficher->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--JQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    
   <div class="container">
       <div class="row">
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>Listes des contisations</thead>
                    <thead>
                        <th>numcotis</th>
                        <th>datecotis</th>
                        <th>mois</th>
                        <th>motif</th>
                        <th>Montant</th>
                        <th>Matricule</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </thead>
                        <tbody>
                           <?php foreach($cotisation as $cotisations):?>
                             <tr>
                                <td><?= $cotisations['numcotis']?> </td>
                                <td> <?= $cotisations['datecotis']?> </td>
                                <td><?= $cotisations['mois']?>  </td>
                                <td><?= $cotisations['motif']?> </td> 
                                <td> <?= $cotisations['montant']?> </td>
                                <td><?= $cotisations['matricule']?></td>
                                <td><a class="delete" data-title="Delete"  data-target="#delete" href="supprimerCotisation.php?numbercotisation=<?= $cotisations['id']?>";><span class="glyphicon glyphicon-trash"></span></a></td>
                                <td><a class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"  href="ModifierPaiement.php?numbercotisation=<?= $cotisations['id']?>";><span class="glyphicon glyphicon-pencil"></span></a></td> 
                           
                            </tr>
                            
                            <?php  endforeach;?>
                        </tbody>  
                </table>
            </div> 
        </div>
   </div>
   <button ><a href="saisieMembre.php">retour</a></button>
   <script>
    $('.delete').on('click',function (e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
            title: 'Voulez vous supprimer cette membre?',
            text: "Il sera suppreimé definitivement!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OUI!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
              location.href = self.attr('href');
            }
        })

    })

    </script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


</body> 
</html>



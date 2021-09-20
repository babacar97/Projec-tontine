<?php
  $host = 'localhost';
  $dbname = 'espacemembre';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM membre";
  
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

</head>
<body>
<?php include("header.php"); ?>
  
    <!-- ajout cotisation -->
    <div class="container">
        <div class="row">
          <div class="table-responsive">   
                <table id="example" class="table table-striped table-bordered " style="width:100%">
                <thead class="liste"><h2>Liste des membres</h2></thead>
                    <thead>
                      
                        <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Matricule</th>
                        <th>Cotisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr>
                        <td><?php echo htmlspecialchars($row['Nom']); ?></td>
                        <td><?php echo htmlspecialchars($row['Prenom']); ?></td>
                        <td><?php echo htmlspecialchars($row['Adresse']); ?></td>
                        <td><?php echo htmlspecialchars($row['Telephone']); ?></td>
                        <td><?php echo htmlspecialchars($row['Matricule']); ?></td>
                        <!-- modal 1 formulaire ajout cotisation -->
                        <td><button type="button" class="btn btn-primary">
                          <a  style="color:white" href="saisiecotisation.php?mat=<?php echo htmlspecialchars($row['Matricule']);?>">cotisation</a>
                        </button</td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                 </div>
                </div>
             </div>   

    <!-- cnd bootstrap -->
    <script src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
      
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
          $(document).ready(function() {
    $('#example').DataTable();
      } );
    </script>
</body>
</html>


                     







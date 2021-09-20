<?php
  $host = 'localhost';
  $dbname = 'espacemembre';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM cotisation";
   
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
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include("header.php"); ?>
  <div class="container">
    <div class="row">
          
            <div class="table-responsive">
               <table id="mytable" class="table table-bordred table-striped" >
                 <thead>
                 <h1>Liste des cotisation </h1>
                 </thead>
                  <thead>
                      <th>ID</th>
                      <th>Numcotis</th>
                      <th>datecotis</th>
                      <th>mois</th>
                      <th>motif</th>
                      <th>montant</th>
                      <th>matricule</th>
                  </thead>
                  <tbody>
                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['id']); ?></td>
                      <td><?php echo htmlspecialchars($row['numcotis']); ?></td>
                      <td><?php echo htmlspecialchars($row['datecotis']); ?></td>
                      <td><?php echo htmlspecialchars($row['mois']); ?></td>
                      <td><?php echo htmlspecialchars($row['motif']); ?></td>
                      <td><?php echo htmlspecialchars($row['montant']); ?></td>
                      <td><?php echo htmlspecialchars($row['matricule']); ?></td>
                      
                    </tr>
                    <?php endwhile; ?>
                 </tbody>
              </table>
          </div>
     </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
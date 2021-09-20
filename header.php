<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4 Introduction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        a{
        
            margin-left:2px;
        }
        button{
            margin-left:20px;
        }
    </style>
</head>

<body>
    <!-- <header class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="listemembres.php" class="nav-link">membres</a>
                </li>
                <li class="nav-item">
                    <a href="Listecotisation.php" class="nav-link">listecotisation</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">modifie/supprime</a>
                </li>
                <li>
                    <a href="saisiemembre.php">Nouveau membre</a>
                </li>
            </ul>
        </div>
</header> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light  fixed" >
  <div class="container">
    <a class="navbar-brand" href="#">carrantech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <button type="button" class="btn btn-outline-primary"><a class="nav-link active" aria-current="page" href="listemembres.php">Listesmembres</a></button> 
      <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="Listecotisation.php">Listecotisation</a></button> 
      <button type="button" class="btn btn-outline-primary"> <a class="nav-link" href="listecotisation1.php">Modifier</a></button> 
      <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="saisiemembre.php" >Nouveau membre</a></button> 
      </div>
    </div>
  </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<!--   popper bootstrap   -->
 <div class="container">
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
                        <a  data-toggle="modal" data-target="#mymodal" href="listemembres.php?mat="<?php echo htmlspecialchars($row['Matricule']); ?>  >ajout cotisation</a>
             </div>
      </div>
</div>
<script >
      $(document).ready(function(){
          setTimeout(function(){
            $("#mymodal").modal('show')
          },2000);
      });
</script>
</body>
</html>




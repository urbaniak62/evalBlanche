<?php
include('header.php');
 ?>
<div class="row ">
       <div class="col s12 m6">
         <div class="card  light-blue darken-1">
           <div class="card-content white-text">
             <span class="card-title">type : <?php echo $vehicule['type']; ?></span>
             <p>description : <?php echo $vehicule['description']; ?></p>
             <p>année : <?php echo $vehicule['annee'] ?></p>
             <p>nombre de porte : <?php echo $vehicule['porte'] ?></p>
             <p>prix  : <?php echo $vehicule['prix'] ?></p>

           </div>
           <div class="card-action">
             <a href="#">view all</a>
             <a href="../vue/add.php">add</a>
             <a href="#">delete </a>
           </div>
         </div>
       </div>
     </div>
     <?php
     include('footer.php');
      ?>

<?php
include('header.php');
 ?>
 <div class="container">
   <div class="row ">
          <div class="col s12 m12 l12">
            <div class="card  light-blue darken-1">
              <div class="card-content white-text">
                <span class="card-title">type : <?php echo $vehicule['type']; ?></span>
                <p>marque : <?php echo $vehicule['marque']; ?></p>
                <p>description : <?php echo $vehicule['description']; ?></p>
                <p>année : <?php echo $vehicule['annee']; ?></p>
                <p>nombre de porte : <?php echo $vehicule['porte']; ?></p>
                <p>cylindre  : <?php echo $vehicule['cylindre']; ?></p>
                <p>vitesse max  : <?php echo $vehicule['speed']; ?></p>
                <p>poids  : <?php echo $vehicule['tonne']; ?></p>
                <p>prix  : <?php echo $vehicule['prix']; ?></p>

              </div>
              <div class="card-action">
              <form class="" action="../controleur/delete.php"method="post">
                <a href="../controleur/index.php">go back</a>
                <a href="../vue/add.php">add</a>
                <!-- <form class="" action="../controleur/delete.php"method="post"> -->
                  <input type="hidden" name="id" value="<?php echo $vehicule['id'] ?>">
                  <a href="#"><input type="submit" name="delete" value="delete"></a>
                </form>
              </div>
            </div>
          </div>
        </div>
 </div>

     <?php
     include('footer.php');
      ?>

<?php
include('header.php');
 ?>
  <?php foreach ($vehicule as $vhl): ?>


 <div class="row ">
        <div class="col s12 m6">
          <div class="card  light-blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">type : <?php echo $vhl['type']; ?></span>
              <p>marque : <?php echo $vhl['marque']; ?></p>
              <p>description : <?php echo $vhl['description']; ?></p>
              <p>année : <?php echo $vhl['annee']; ?></p>
              <p>nombre de porte : <?php echo $vhl['porte']; ?></p>
              <p>cylindre : <?php echo $vhl['cylindre']; ?></p>
              <p>vitesse max : <?php echo $vhl['speed']; ?></p>
              <p>prix  : <?php echo $vhl['prix']; ?></p>
            </div>
            <div class="card-action">
              <a href="../controleur/oneVhlCont.php?id=<?php echo $vhl['id'] ?>">view all</a>
              <a href="../controleur/insert.php">add</a>
              <form class="" method="post">
                <input type="submit" name="delete" value="delete">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


      <?php endforeach; ?>





 <?php
include('footer.php');

  ?>

<?php
include('header.php');
 ?>

  <div class="tralala">
  <?php foreach ($vehicule as $vhl): ?>

        <div class="row col s12 m6 carte">
          <div class="card  light-blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">type : <?php echo $vhl['type']; ?></span>
              <p>marque : <?php echo $vhl['marque']; ?></p>
              <p>description : <?php echo $vhl['description']; ?></p>
              <p>année : <?php echo $vhl['annee']; ?></p>
              <p>nombre de porte : <?php echo $vhl['porte']; ?></p>
              <p>cylindre : <?php echo $vhl['cylindre']; ?></p>
              <p>vitesse max : <?php echo $vhl['speed']; ?></p>
              <p>poids  : <?php echo $vhl['tonne']; ?></p>
              <p>prix  : <?php echo $vhl['prix']; ?></p>
            </div>
            <div class="card-action">
              <a href="../controleur/oneVhlCont.php?id=<?php echo $vhl['id'] ?>">view all</a>
              <a href="../controleur/insert.php">add</a>
              <form class="" action="../controleur/delete.php"method="post">
                <input type="hidden" name="id" value="<?php echo $vhl['id'] ?>">
                <input type="submit" name="delete" value="delete">
              </form>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      </div>










 <?php
include('footer.php');

  ?>

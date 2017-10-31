<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.class.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/camion.class.php');


$manager2=new Manager('crud');

// -------------------insert vehicule
// ----------------------------------
  if (isset($_POST['type']) && $_POST['type']=='vehicule') {
    // var_dump($_POST);
    $car=new Voiture($_POST);
    // var_dump($car);
    $manager2->insert($car);
  }

  // -------------------------insert motos
  // -------------------------------------

elseif (isset($_POST['type']) && $_POST['type']=='motos') {
  $motos=new Motos($_POST);
  var_dump($motos);
  $manager2->insertM($motos);
}

// -------------------------insert camion
// -------------------------------------

elseif (isset($_POST['type']) && $_POST['type']=='camion') {
  $camion=new Camion($_POST);

  $manager2->insertC($camion);
header('location:../controleur/index.php');
}

require_once('../vue/add.php');




 ?>

<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.class.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/camion.class.php');

$manager2=new Manager('crud');
$vehicule=$manager2->selectByName($_POST['id']);
if (isset($_POST['submit']) && $_POST['type']=='voiture') {
  // var_dump($_POST);
  $car=new Voiture($_POST);
  var_dump($car);
  $manager2->update($car);
}

// -------------------------insert motos
// -------------------------------------

elseif (isset($_POST['type']) && $_POST['type']=='motos') {
$motos=new Motos($_POST);
var_dump($motos);
$manager2->update($motos);
}

// -------------------------insert camion
// -------------------------------------

elseif (isset($_POST['type']) && $_POST['type']=='camion') {
$camion=new Camion($_POST);

$manager2->update($camion);
header('location:../controleur/index.php');
}



var_dump($vehicule);
require_once('../vue/edit.php');
?>

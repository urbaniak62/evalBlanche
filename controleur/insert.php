<?php
require_once('../model/pdo.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/crudManager.class.php');

$manager2=new Manager('crud');
// if (isset ($_POST['type']) && isset($_POST['marque']) && isset($_POST['description'])
// && isset($_POST['porte']) && isset($_POST['annee']) && isset($_POST['prix'])
// && isset($_post['cylindre']) && isset($_POST['speed'])) {
  if (isset($_POST['type']) && $_POST['type']=='vehicule') {
    // var_dump($_POST);
    $car=new Voiture($_POST);
    // var_dump($car);
    $manager2->insert($car);
  }
elseif (isset($_POST['type']) && $_POST['type']=='motos') {
  $motos=new Motos($_POST);
  var_dump($motos);
  $manager2->insertM($motos);

}

require_once('../vue/add.php');




 ?>

<?php
require_once('../model/pdo.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/crudManager.class.php');

$manager2=new Manager('crud');
if (isset ($_POST['type']) && isset($_POST['marque']) && isset($_POST['description'])
&& isset($_POST['porte']) && isset($_POST['annee']) && isset($_POST['prix'])
&& isset($_post['cylindre']) && isset($_POST['speed'])) {

$moto=new Manager ($_POST['type'],$_POST['marque'],
$_POST['description'],$_POST['porte'],
$_POST['annee'],$_POST['prix'],$_POST['cylindre'],$_POST['speed']);

}
$moto=$manager2->insert($insert);

var_dump($manager2);
require_once('../vue/add.php');
require_once('../indexVue.php');



 ?>

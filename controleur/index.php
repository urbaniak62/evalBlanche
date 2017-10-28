<?php
require_once('../model/pdo.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/crudManager.class.php');

// -------------------connected bdd
// --------------------------------

$manager1=new Manager('crud');


$vehicule=$manager1->select();


require_once('../vue/indexVue.php');
// require_once('oneVhl.php');
 ?>

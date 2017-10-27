<?php
require_once('../model/pdo.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/crudManager.class.php');


$manager1=new Manager('crud');


$vehicule=$manager1->selectByName($_GET['id']);

var_dump($_GET['id']);

require_once('../vue/oneVhl.php');

?>

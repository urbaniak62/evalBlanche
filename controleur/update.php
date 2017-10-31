<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.class.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/camion.class.php');

$manager2=new Manager('crud');

require_once('../vue/edit.php');
?>

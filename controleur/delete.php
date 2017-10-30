<?php
require_once('../model/pdo.php');
require_once('../model/vehicule.class.php');
require_once('../model/voiture.class.php');
require_once('../model/motos.class.php');
require_once('../model/crudManager.class.php');

// -------------------connected bdd
// --------------------------------

$manager1=new Manager('crud');

if (isset($_POST['delete'])) {
var_dump($_POST);
$manager1->delete($_GET['id']);
}



require_once('../vue/indexVue.php');
require_once('../vue/oneVhl.php');


 ?>

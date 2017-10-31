<?php
require_once('pdo.php');

require_once('vehicule.class.php');
require_once('voiture.class.php');


class camion extends Vehicule{
  private $_tonne;

// -----------------setters
// ----------------------------

  public function setTonne($tonne){
    $this->_tonne=$tonne;
    
  }

// ----------------getter
// -----------------------

public function getTonne(){
  return $this->_tonne;
}


}

 ?>

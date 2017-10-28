<?php
require_once('pdo.php');

require_once('vehicule.class.php');
require_once('voiture.class.php');

class Motos extends vehicule{
  private $_cylindre;
  private $_speed;

  public function setCylindre($cylindre){
    $this->_cylindre=$cylindre;
  }
  public function setSpeed($speed){
    $this->_speed=$speed;
  }
  // -------------GETTERS
// ------------------------------

public function getCylindre(){
  return $this->_cylindre;
}
public function getSpeed(){
  return $this->_speed;
}

public function affiche(){
echo $this->_cylindre .  $this->_speed;
}
}
?>

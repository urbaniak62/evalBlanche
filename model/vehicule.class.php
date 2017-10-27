<?php
require_once('pdo.php');


abstract class Vehicule{
  private $_type;
  private $_marque;
  private $_description;
  private $_price;

  // --------------------------------constructeur
// --------------------------------------------
  public function __construct(array $donnes){
    $this->hydrate($donnes);
  }
// ---------------------------------hydratation
// --------------------------------------------
  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

// ----------------setter
// -----------------------
public function setType($type){
  $this->_type=$type;
}

  public function setMarque($marque){
    $this->_marque=$marque;
  }

  public function setDescription($description){
  $this->_description=$description;
}

public function setPrice($price){
  $this->_price=$price;
}

// --------------getter
// ---------------------------
public function getType(){
  return $this->_type;
}


public function getMarque(){
  return $this->_marque;
}
public function getPrice(){
  return $this->_price;
}
public function getDescription(){
  return $this->_description;
}


}
 ?>

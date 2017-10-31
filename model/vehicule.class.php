<?php
require_once('pdo.php');


abstract class Vehicule{
  protected $id;
  protected $type;
  protected $marque;
  protected $description;
  protected $prix;

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
public function setId($id){
  $this->id=$id;
}


public function setType($type){
  $this->type=$type;
}

  public function setMarque($marque){
    $this->marque=$marque;
  }

  public function setDescription($description){
  $this->description=$description;
}

public function setPrix($prix){
  $this->prix=$prix;
}

// --------------getter
// ---------------------------
public function getId(){
  return $this->id;
}

public function getType(){
  return $this->type;
}


public function getMarque(){
  return $this->marque;
}
public function getPrix(){
  return $this->prix;
}
public function getDescription(){
  return $this->description;
}


}
 ?>

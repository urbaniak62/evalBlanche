<?php
require_once('pdo.php');

require_once('vehicule.class.php');



class Manager{
  private $_crud;

  // -------constructeur

    public function __construct($crud){
        $this->_crud=$crud;

}

  // -------------setter
// ----------------------------
  public function setCrud($crud){
    $this->_crud=$crud;
  }

// ----------------getter
// ---------------------------
  public function getCrud(){
    return $this->_crud;
  }

  // --------------methode insert
  // ----------------------

  public function insert(vehicule $insert_vehicule){
    $req=connection()-> prepare('INSERT INTO vehicule(type,description,marque,porte,annee,prix,cylindre,speed)
        VALUES(:type,:description,:marque,porte,annee,prix)');

        $req->execute (array(
  'type'=>$insert->getType(),
  'description'=>$insert->getDescription(),
  'marque'=>$insert->getMarque(),
  'porte'=>$insert->getPorte(),
  'annee'=>$insert->getAnnee(),
  'prix'=>$insert->getPrix(),
  'cylindre'=>$insert->getCylindre(),
  'speed'=>$insert->getSpeed(),

  ));
  }

// -------------------methode select all
// -------------------------------------
  public function select(){
  $req=connection()->query('SELECT * FROM vehicule');

  $vehicule=$req->fetchAll(PDO::FETCH_ASSOC);
  return $vehicule;

  }
// -----------------methode select by Name
// ----------------------------------------

public function selectByName($id){
  $req=connection()->prepare('SELECT type,description,prix,annee,porte FROM vehicule WHERE id=:id');
  $req->execute(array(
  'id'=>$id
));
  $vehicule=$req->fetch(PDO::FETCH_ASSOC);
  return $vehicule;
}
// -------------------methode delete
// -------------------------------------
public function delete($id){
  $req=connection()->query('DELETE * FROM vehicule WHERE id=:id');
  $req->execute(array(
    'id'=>$id
  ));
  $vehicule=$req->fetchAll(PDO::FETCH_ASSOC);
  return $vehicule;
}
}

 ?>

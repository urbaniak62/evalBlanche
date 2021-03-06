<?php
require_once('pdo.php');
require_once('vehicule.class.php');
require_once('motos.class.php');
require_once('voiture.class.php');
require_once('camion.class.php');

class Manager{
  private $_crud;


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

  public function insert($insert){
    $req=connection()-> prepare('INSERT INTO vehicule(type,description,marque,porte,annee,prix)
        VALUES(:type,:description,:marque,:porte,:annee,:prix)');

        $req->execute (array(
  'type'=>$insert->getType(),
  'marque'=>$insert->getMarque(),
  'description'=>$insert->getDescription(),
  'porte'=>$insert->getPorte(),
  'prix'=>$insert->getPrix(),
  'annee'=>$insert->getAnnee()
  ));
  }
// -------------insertMotos
// --------------------------------
  public function insertM($insertM){
    $req=connection()-> prepare('INSERT INTO vehicule(type,description,marque,cylindre,speed,prix)
        VALUES(:type,:description,:marque,:cylindre,:speed,:prix)');

        $req->execute (array(
  'type'=>$insertM->getType(),
  'marque'=>$insertM->getMarque(),
  'description'=>$insertM->getDescription(),
  'cylindre'=>$insertM->getCylindre(),
  'speed'=>$insertM->getSpeed(),
  'prix'=>$insertM->getPrix()
  ));
  }

// -----------------insertCamion
// -------------------------------

public function insertC($insertC){
  $req=connection()-> prepare('INSERT INTO vehicule(type,description,marque,tonne,prix)
      VALUES(:type,:description,:marque,:tonne,:prix)');

      $req->execute (array(
'type'=>$insertC->getType(),
'marque'=>$insertC->getMarque(),
'description'=>$insertC->getDescription(),
'tonne'=>$insertC->getTonne(),
'prix'=>$insertC->getPrix()
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
  $req=connection()->prepare('SELECT id,type,marque,description,prix,annee,tonne,cylindre,speed,porte FROM vehicule WHERE id=:id');
  $req->execute(array(
  'id'=>$id
));
  $vehicule=$req->fetch(PDO::FETCH_ASSOC);
  return $vehicule;
}
// -------------------methode delete
// -------------------------------------
public function delete($id){
  $req=connection()->prepare('DELETE  FROM vehicule WHERE id=:id');
  $req->execute(array(
    'id'=>$id
  ));

}
// --------------------methode update
// -------------------------------------
public function update($vehicule){
  $req=connection()->prepare('vehicule SET type= :type,id = :id,
  marque= :marque,annee = :annee,description = :description,
  prix= :prix,cylindre= :cylindre,speed =:speed,porte =:porte WHERE id= :id');
  $req-> execute(array(
    'type'=>$vehicule->getType(),
    'id'=>$vehicule->getId(),
    'marque'=>$vehicule->getMarque(),
    // 'annee'=>$vehicule->getAnnee(),
    'description'=>$vehicule->getDescription(),
    'prix'=>$vehicule->getPrix(),
    'cylindre'=>$vehicule->getCylindre(),
    'porte'=>$vehicule->getPorte(),
    'speed'=>$vehicule->getSpeed()

  ));
}
}

 ?>

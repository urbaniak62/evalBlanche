<?php
require_once('pdo.php');

require_once('vehicule.class.php');
require_once('motos.class.php');

class Voiture extends Vehicule{
  private $annee;
  private $porte;



// -----------------getters
  //-------------------------
    public function getAnnee()
    {
        return $this->$annee;
    }
    public function getPorte()
    {
        return $this->$porte;
    }

 // ---------------setters
 //---------------------------
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    public function setPorte($porte)
    {
        $this->porte = $porte;

        return $this;
    }


}

 ?>

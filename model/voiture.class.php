<?php
require_once('pdo.php');

require_once('vehicule.class.php');
require_once('motos.class.php');

class Voiture extends Vehicule{
  private $_annee;
  private $_porte;



// -----------------getters
  //-------------------------
    public function getAnnee()
    {
        return $this->_annee;
    }
    public function getPorte()
    {
        return $this->_porte;
    }

 // ---------------setters
 //---------------------------
    public function setAnnee($_annee)
    {
        $this->_annee = $annee;

        return $this;
    }

    public function setPorte($_porte)
    {
        $this->_porte = $porte;

        return $this;
    }
  

}

 ?>

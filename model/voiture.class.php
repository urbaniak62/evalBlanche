<?php
require_once('pdo.php');

require_once('vehicule.class.php');
require_once('motos.class.php');

class Voiture extends vehicule{
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
        $this->_annee = $_annee;

        return $this;
    }

    public function setPorte($_porte)
    {
        $this->_porte = $_porte;

        return $this;
    }
    public function affiche(){
    echo $this->_type .  $this->_marque
    . $this->_description . " " . $this->_price
    . $this->_annee . $this_porte;
  }

}

 ?>

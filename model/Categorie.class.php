<?php
require_once "DAO.class.php";

class Categorie{
  private $id;
  private $nom;
  private $pere;

  function getId() : string{
    return $this->id;
  }

  function getNom() : string{
    return $this->nom;
  }

  function getPere() : string{
    return $this->pere;
  }

//Calcul du chemin de la categorie.
  function getPath($dao){
    $path = array();
    $curr = $this;
    while($curr->getId() != $curr->getPere()){
      $path[] = $curr->getNom();
      $curr = $dao->getCat($curr->getPere());
    }
    $path[] = $curr->getNom();
    return array_reverse($path);
  }
}


 ?>

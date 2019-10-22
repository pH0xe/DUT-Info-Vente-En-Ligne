<?php
include_once("../model/DAO.class.php");

class Panier{

  private $i;

  function __construct(){

  }
// avec i compte ou on en est et mettre i a jour en regardant nom du string
  public function ajoute($ref){
    if (!isset($_COOKIE["panier"]) || $_COOKIE["panier"] == ""){
      setcookie("panier",$ref);
    }
    else {
      setcookie("panier",$_COOKIE["panier"]."|$ref");
    }
  }
}
 ?>

<?php
include_once("../model/DAO.class.php");


class Panier{

  function __construct(){
    if (!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
      $_SESSION['panier']['quantite'] = array();
      $_SESSION['panier']['article'] = array();
    }
  }

  public function ajoute($ref){
    $dao = new DAO();
    $verif = 0;
    $i = 0;
    $article = $dao->getArt($ref);
    while($i < count($_SESSION['panier']['article']) && $verif == 0) {
      if ($_SESSION['panier']['article'][$i] == $article) {
        $verif = 1;
        $i = $i -1;
      }
      $i = $i + 1;
    }
    if ($verif == 0){
      array_push($_SESSION['panier']['article'], $article);
      array_push($_SESSION['panier']['quantite'], 1);
    }
    else{
      $_SESSION['panier']['quantite'][$i] = $_SESSION['panier']['quantite'][$i] + 1;
    }
  }

  public function afficher(){
    var_dump($_SESSION['panier']);
  }

  public function supprimer($ref){
    $dao = new DAO();
    $article = $dao->getArt($ref);
    $verif = 0;
    $i = 0;
    while($i < count($_SESSION['panier']['article']) && $verif == 0) {
      if ($_SESSION['panier']['article'][$i] == $article) {
        $verif = 1;
        $i = $i -1;
      }
      $i = $i + 1;
    }
    if ($verif == 1){
      unset($_SESSION['panier']['article'][$i]);
      $_SESSION['panier']['article'] = array_merge($_SESSION['panier']['article']);
      unset($_SESSION['panier']['quantite'][$i]);
      $_SESSION['panier']['quantite'] = array_merge($_SESSION['panier']['quantite']);
    }
  }

  public function vider(){
    $_SESSION['panier'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['article'] = array();
  }

public function bouton($ref, $type){
  echo"<INPUT TYPE=\"BUTTON\" value=\"PAYER\" ONCLICK=window.location.href='../controler/modifierPanier.ctrl.php?ref=$ref&type=$type'";
}

}
 ?>

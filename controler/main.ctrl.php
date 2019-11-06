<?php
  require_once('../model/DAO.class.php');
  require_once('../framework/view.class.php');
  include_once("../model/Panier.class.php");

  session_start();
  $DAO = new DAO();
  $view = new View();
  $idCat = array();
  $categorie = array();
  $panier = new Panier();
  $vide = (count($_SESSION['panier']['article']) == 0);

  if (isset($_GET['categorie'])){
    if ($DAO->estTropGrand($_GET['categorie']) && (intval(($_GET['categorie'])) > 1)) {
    $categorie = $_GET['categorie'];
    $cat = $DAO->getCat($categorie);
    $idCat[] = $cat->getId();
    $catFille = array();
    $catFille = $DAO->getAllFille($categorie);
    foreach ($catFille as $key => $value) {
        $idCat[] = $value->getId();
      }
     }
     else{
       $categorie = $DAO->getAllCat();
       foreach ($categorie as $key => $value) {
         $idCat[] = $value->getId();
       }
     }
  }else{
    $categorie = $DAO->getAllCat();
    foreach ($categorie as $key => $value) {
      $idCat[] = $value->getId();
    }
  }
  $article = array();
  foreach ($idCat as $key => $value) {
    $idArt = array();
      $idArt = $DAO->getAllArt($value);
      foreach ($idArt as $key2 => $value2) {
        $article[] = $value2;
      }
  }
  $view->assign("categories", $DAO->getAllCat());
  $view->assign("categorie",$categorie);
  $view->assign("article",$article);
  $view->assign("vide",$vide);
  $view->display("../view/main.view.php");

 ?>

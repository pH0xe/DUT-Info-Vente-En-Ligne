<?php
  require_once('../model/DAO.class.php');
  require_once('../framework/view.class.php');

  $DAO = new DAO();
  $view = new View();
  $idCat = array();
  $categorie = array();
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
  $view->display("../view/main.view.php");

 ?>

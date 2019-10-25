<?php
  require_once('../model/DAO.class.php');
  require_once('../framework/view.class.php');

  $DAO = new DAO();
  $view = new View();
  $idCat = array();
  $categories = array();
  if (isset($_GET['categorie'])){
    if ($DAO->estTropGrand($_GET['categorie']) && (intval(($_GET['categorie'])) > 0)) {
    $categories = $_GET['categorie'];
    $cat = $DAO->getCat($categories);
    $idCat[] = $cat->getId();
    $catFille = array();
    $catFille = $DAO->getAllFille($categories);
    foreach ($catFille as $key => $value) {
        $idCat[] = $value->getId();
      }
     }
     else{
       $categories = $DAO->getAllCat();
       foreach ($categories as $key => $value) {
         $idCat[] = $value->getId();
       }
     }
  }else{
    $categories = $DAO->getAllCat();
    foreach ($categories as $key => $value) {
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

  $view->assign("categories",$categories);
  $view->assign("article",$article);
  //$view->display("header.view.html");
  $view->display("../view/main.view.php");

 ?>

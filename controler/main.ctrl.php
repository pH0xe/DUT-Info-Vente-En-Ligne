<?php
  require_once('../model/DAO.class.php');
  require_once('../framework/view.class/php');

  $DAO = new DAO();
  $view = new View();
  $idCatCat = array();
  if isset($_GET('categorie')){
    $categories = $_GET('categorie');
    $idCat[] = $DAO->getCat($categories)
    $catFille = array();
    $catFille = $DAO->getAllFille($categories);
    foreach ($catFille as $key => $value) {
      $idCat[] = $value->getId();
    }
  }else{
    $categories = array();
    $categories = $DAO->getAllCat();
    foreach ($categories as $key => $value) {
      $idCat[] = $value->getId();
    }
  }
  $article = array();
  foreach ($idCat as $key => $value) {
    $idArt = array();
      $idArt = $DAO->getAllArt($idCat);
      foreach ($idArt as $key2 => $value2) {
        $article[] = $value2->getId();
      }
  }
  $view->assign($categories);
  $view->assign($article);
  $view->display("../view/main.view.php");

 ?>

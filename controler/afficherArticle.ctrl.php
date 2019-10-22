<?php

  require_once("../framework/view.class.php");
  require_once("../model/DAO.class.php");

  $dao = new DAO();
  $view = new View();

  if (isset($_GET["ref"])) {
    $ref = $_GET["ref"];
    $article = $dao->getArt($ref);
  } else {
    $view->display("../view/erreur.view.html");
    die();
  }

  if (isset($_GET["cat"])){
    $cat = $dao->getCat($_GET["cat"]);
    $catPath =  $cat->getPath($dao);
  } else {
    $cat = 1;
    $catPath = "Home";
  }

  $categories = $dao->getAllCat();


  $view->assign("categories", $categories);
  $view->assign("ref", $ref);
  $view->assign("article", $article);
  $view->assign("cat", $cat);
  $view->assign("catPath", $catPath);

  $view->display("article.view.php");
 ?>

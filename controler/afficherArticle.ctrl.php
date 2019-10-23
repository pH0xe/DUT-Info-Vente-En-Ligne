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
  $paths = parse_ini_file("../config/config.ini");
  $path = $paths["image_path"];
  $categories = $dao->getAllCat();
  $imgArticle = $path.$article->getImage();

  $view->assign("imgArticle", $imgArticle);
  $view->assign("categories", $categories);
  $view->assign("ref", $ref);
  $view->assign("article", $article);
  $view->assign("cat", $cat);
  $view->assign("catPath", $catPath);
  $view->assign("titreArticle", $article->getLibelle());
  $view->assign("descrArticle", $article->getDescription());
  $view->assign("prixArticle", $article->getPrix());

  $view->display("header.view.html");
  $view->display("article.view.php");
 ?>

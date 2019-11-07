<?php

  require_once("../framework/view.class.php");
  require_once("../model/DAO.class.php");
  require_once("../model/Panier.class.php");

  session_start();
  $dao = new DAO();
  $view = new View();
  $panier = new Panier();
  $vide = (count($_SESSION['panier']['article']) == 0);

  // On verifie que l'article existe dans la BD si il n'existe pas on redirige vers une page d'erreur.
  if (isset($_GET["ref"])) {
    $ref = $_GET["ref"];
    $article = $dao->getArt($ref);
  } else {
    $view->display("../view/erreur.view.html");
    die();
  }

  // Si une categories est indiqué on recupere le chemin de cet article sinon on affiche juste "home"
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
  $view->assign("panier", $panier);
  $view->assign("vide", $vide);

  $view->display("article.view.php");
 ?>

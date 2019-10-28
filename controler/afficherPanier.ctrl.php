<?php

include_once("../model/Panier.class.php");
include_once("../framework/view.class.php");
include_once("../model/DAO.class.php");

$view = new View();
$dao = new DAO();

session_start();
$panier = new Panier();
$vide = (count($_SESSION['panier']['article']) == 0);
$categories = $dao->getAllCat();

$view->assign("panier", $panier);
$view->assign("categories", $categories);

if ($vide){
 $view->display("panierVide.view.php");
} else {
 $view->display("panier.view.php");
}
 ?>

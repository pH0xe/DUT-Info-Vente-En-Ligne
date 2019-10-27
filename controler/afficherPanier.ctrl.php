<?php

include_once("../model/Panier.class.php");
session_start();
$panier = new Panier();
$vide = (count($_SESSION['panier']['article']) == 0);
include("../view/panier.view.php");
 ?>

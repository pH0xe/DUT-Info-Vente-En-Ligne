<?php
include_once("../model/Panier.class.php");
$panier = new Panier();
$panier->ajoute(111);
$panier->ajoute(222);
$panier->ajoute(333);
echo $_COOKIE["panier"];
echo "<br>";
setcookie ("TestCookie", "", time() - 3600);
 ?>

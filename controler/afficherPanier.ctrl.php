<?php

include_once("../model/Panier.class.php");
session_start();
$panier = new Panier();
$panier->afficher();
 ?>

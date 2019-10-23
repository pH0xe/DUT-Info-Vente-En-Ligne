<?php
require_once ("DAO.class.php");

$categories = new DAO();
$cats = $categories->getAllArt(3);
var_dump($cats);
 ?>

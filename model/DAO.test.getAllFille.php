<?php
require_once ("DAO.class.php");

$categories = new DAO();
$cats = $categories->getAllFille(1);
var_dump($cats);
 ?>

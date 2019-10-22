<?php
require_once("DAO.class.php");
require_once("Article.class.php");
$articles = new DAO();
$art = $articles->getArt("200409");
$art2 = $articles->getArt(200412);
echo $art->getLibelle();
echo "\n";
echo $art2->getLibelle();

 ?>

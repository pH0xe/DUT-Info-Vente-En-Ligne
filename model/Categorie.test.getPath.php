<?php
require_once("Categorie.class.php");

$categories = new DAO();
$chemin = $categories->getCat(6)->getPath($categories);
$last = $chemin[array_key_last($chemin)];
foreach ($chemin as $nom) {
  echo "$nom";
  if ($nom != $last){
    echo " > ";
  }
  else {
    echo "\n";
  }
}
 ?>

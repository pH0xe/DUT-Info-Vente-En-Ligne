<?php
include("Categorie.class.php");

$paths = parse_ini_file("../config/config.ini");
$path = $paths["database_path"];
$categories = new DAO($path);
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

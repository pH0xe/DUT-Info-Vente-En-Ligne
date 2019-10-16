<?php
  require_once("DAO.class.php");

  $categories = new DAO();

  $cats = $categories->getAllCat();
  $i = 1;
  foreach ($cats as $key => $value) {
    print("categorie $i : ".$value->getNom());
    print("\n");
    $i +=1;
  }
 ?>

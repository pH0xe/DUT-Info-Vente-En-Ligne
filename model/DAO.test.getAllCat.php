<?php
  include("DAO.class.php");

  $paths = parse_ini_file("../config/config.ini");
  $path = $paths["database_path"];
  $categories = new DAO($path);

  $cats = $categories.getAllCat();
  $i = 1;
  foreach ($cats as $key => $value) {
    print("categprie $i : $value");
  }
 ?>

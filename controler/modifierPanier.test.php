<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("../model/Panier.class.php");
    $panier = new Panier();
    $panier->bouton(200412,"ajouter");
     ?>
  </body>
</html>

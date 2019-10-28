<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("../model/Panier.class.php");
    session_start();
    $panier = new Panier();
    $panier->ajoute(200412);
    $panier->ajoute(200412);
    $panier->ajoute(200412);
    $panier->ajoute(200408);
    $panier->ajoute(200408);
    $panier->ajoute(200408);
    $panier->ajoute(200412);
    $panier->ajoute(200412);
    $panier->ajoute(200411);
    $panier->boutonAjouter(200411);
     ?>
  </body>
</html>

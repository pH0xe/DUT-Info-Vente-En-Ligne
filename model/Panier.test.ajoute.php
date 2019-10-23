<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once("../model/Panier.class.php");
    include_once("../model/DAO.class.php");
    session_start();
    $ref = 200412;
    $ref2 = 200414;
    $dao = new DAO();
    $panier = new Panier();
    $panier->ajoute($ref);
    $panier->ajoute($ref2);
    $panier->ajoute($ref);
    $panier->afficher();
    session_destroy();
     ?>
  </body>
</html>

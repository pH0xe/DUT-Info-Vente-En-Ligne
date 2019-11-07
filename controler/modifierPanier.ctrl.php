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
    if (isset($_GET['ref']) && isset($_GET['type'])){
        $type = $_GET['type'];
        $ref = $_GET['ref'];
        if ($type == "ajouter"){
          $panier->ajoute($ref);
          header('Location: ../controler/afficherPanier.ctrl.php');
        }
        else if ($type == "supprimer"){
          $panier->supprimer($ref);
          header('Location: ../controler/afficherPanier.ctrl.php');
        }
    }
    else if (isset($_GET['type'])){
        $type = $_GET['type'];
        if ($type == "vider") {
            $panier->vider();
            header('Location: ../controler/afficherPanier.ctrl.php');
        }else if ($type == "finCommande"){
            $panier->vider();
            header('Location: ../controler/main.ctrl.php');
        }
    }
     ?>
  </body>
</html>

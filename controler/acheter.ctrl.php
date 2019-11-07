<?php
    require_once("../framework/view.class.php");
    require_once("../model/DAO.class.php");
    require_once("../model/Panier.class.php");

    $dao = new DAO();
    $view = new View();
    $panier = new Panier();

    session_start();
    $vide = (count($_SESSION['panier']['article']) == 0);
    $categories = $dao->getAllCat();
    $view->assign("categories", $categories);
    $view->assign("vide", $vide);

    if (!isset($_GET["etat"])){
        $view->display("panierVide.view.php");
    } else {
        $etat = $_GET["etat"];

        if ($etat === "information") {
            $prixTotal = 0;
            foreach ($_SESSION['panier']['article'] as $key => $value) {
                $prixTotal = $value->getPrix() * $_SESSION['panier']['quantite'][$key] + $prixTotal;
            }
            $view->assign("prixTotal", $prixTotal);

            $view->display("achatInfo.view.php");
        } elseif ($etat === "renseignement"){
            $view->display("formulaireRenseignement.view.php");
        } elseif ($etat === "fin"){
            if (isset($_GET['pub'])){
                $pub =true;
            } else {
                $pub = false;
            }

            $prixTotal = 0;
            foreach ($_SESSION['panier']['article'] as $key => $value) {
                $prixTotal = $value->getPrix() * $_SESSION['panier']['quantite'][$key] + $prixTotal;
            }

            $nomPrenom = $_GET['nom']." ".$_GET['prenom'];
            $mail = $_GET['mail'];
            $view->assign('nomPrenom', $nomPrenom);
            $view->assign('pub', $pub);
            $view->assign('mail', $mail);
            $view->assign('prixTotal', $prixTotal);

            $view->display("recap.view.php");
        }
    }
?>

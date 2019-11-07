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

    // Si aucun etat est indiqué on considére que le panier est vide et on invite l'utilisateur a retourner acheter des produits.
    if (!isset($_GET["etat"])){
        $view->display("panierVide.view.php");
    } else {
        $etat = $_GET["etat"];

        // permet d'ouvrir differente fenetre en fonction de l'étape de la commande. on inscrit differente variable en fonction de l'étape.
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

            $listArticle = array();
            $listQts = array();
            $prixTotal = 0;
            foreach ($_SESSION['panier']['article'] as $key => $value) {
                $prixTotal = $value->getPrix() * $_SESSION['panier']['quantite'][$key] + $prixTotal;
                $listArticle[] = $value;
                $listQts[] = $_SESSION['panier']['quantite'][$key];
            }

            $panier->vider();


            $nomPrenom = $_GET['nom']." ".$_GET['prenom'];
            $mail = $_GET['mail'];
            $view->assign('nomPrenom', $nomPrenom);
            $view->assign('pub', $pub);
            $view->assign('mail', $mail);
            $view->assign('prixTotal', $prixTotal);
            $view->assign("listArticle", $listArticle);
            $view->assign("listQts", $listQts);

            $view->display("recap.view.php");
        }
    }
?>

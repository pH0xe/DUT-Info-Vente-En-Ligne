<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel="stylesheet" href="../view/style/achatInfo.css">
    <title>Chez Violette</title>
</head>
<body>
    <?php include "../view/header.view.php" ?>

    <?php include "../view/nav.view.php" ?>
    <h2>Vous aller acheter les articles suivants :</h2>
    <?php  foreach ($_SESSION['panier']['article'] as $key => $value) { ?>
        <div class="article">
            <p><?= $value->getLibelle()?> x<?= $_SESSION['panier']['quantite'][$key]?></p>
        </div>
    <?php  } ?>
    <section>
        <p>Prix total de la commande  : <?= $prixTotal ?></p>
        <input type="button" value="Etape suivante" ONCLICK=window.location.href='../controler/acheter.ctrl.php?etat=renseignement'>
    </section>
</body>
</html>

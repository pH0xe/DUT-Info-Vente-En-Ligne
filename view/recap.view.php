<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel="stylesheet" href="../view/style/recap.css">
    <title>Chez Violette</title>
</head>
<body>
    <?php include "../view/header.view.php" ?>
    <?php include "../view/nav.view.php" ?>
    <section>
        <p>Merci beaucoup <?= $nomPrenom ?> pour votre achat d'un montant de <?= $prixTotal ?>€. <br>
            Un email de confirmation a été envoyé à <?= $mail ?> <br>
            <?php if ($pub) {?>
                Vous avez accepter de recevoir de la publicité de notre part. <br>
            <?php } ?>
            Rappel de la commande :</p>
        <?php  foreach ($_SESSION['panier']['article'] as $key => $value) { ?>
            <div class="article">
                <p><?= $value->getLibelle()?> x<?= $_SESSION['panier']['quantite'][$key]?></p>
            </div>
        <?php  } ?>
        <INPUT class="" TYPE="BUTTON" value="Retour à l'accueil " ONCLICK=window.location.href='../controler/modifierPanier.ctrl.php?type=finCommande'>
    </section>
</body>
</html>

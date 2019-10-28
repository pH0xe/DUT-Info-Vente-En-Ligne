<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Chez violette</title>
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/panier.css">
</head>
<body>
    <?php include("../view/header.view.html"); ?>

    <div class="container">
        <?php include("../view/nav.view.php"); ?>

        <div>
            <?php  foreach ($_SESSION['panier']['article'] as $key => $value) { ?>
                <div class="article">
                    <p><?= $value->getLibelle()?> x<?= $_SESSION['panier']['quantite'][$key]?> <?php $panier->boutonSupprimer($value->getRef()); ?></p>
                </div>
            <?php  } ?>
            <?= $panier->boutonVider(); ?>
        </div>
    </div>
</body>
</html>

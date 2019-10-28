<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/style/article.css">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel='icon' href='../favicon.ico' type='image/x-icon'/ >
  </head>
  <body>
    <?php include('../view/header.view.html'); ?>

    <div class="container">
        <?php include('../view/nav.view.php'); ?>
      <section>
        <h2><?= $titreArticle ?></h2>
        <img src="<?= $imgArticle ?>" alt="Image de l'article à afficher">
        <h3>Description de l'article : </h3>
        <p><?= $descrArticle ?></p>
        <p>Prix : <?= $prixArticle ?> €</p>
        <?= $panier->boutonAjouter($ref); ?>
      </section>
    </div>
  </body>
</html>

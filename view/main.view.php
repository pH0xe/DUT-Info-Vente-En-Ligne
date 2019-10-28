<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/style/main.css">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel='icon' href='../favicon.ico' type='image/x-icon'/ >
  </head>
  <body>
    <?php include "../view/header.view.html"?>
    <div class="container">

        <?php include "../view/nav.view.php" ?>
        <section class="allArt">
            <?php foreach ($article as $key => $value): ?>
                        <a href ="afficherArticle.ctrl.php?ref=<?= $value->getRef(); ?>" class="article">
                            <img src="../data/img/<?= $value->getImage(); ?>">
                            <P><?= $value->getLibelle();  ?></p>
                        </a>
            <?php endforeach; ?>
        </section>
    </div>

    <footer></footer>
  </body>
</html>

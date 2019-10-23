<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/style/article.css">
    <!-- <link rel="stylesheet" href="style/article.css"> -->
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
        <?php foreach ($categories as $key => $value): ?>
          <li><a href="#"><?= $value->getNom(); ?></a></li>
        <?php endforeach; ?>
        </ul>
      </nav>
      <section>
        <h2><?= $titreArticle ?></h2>
        <img src="<?= $imgArticle ?>" alt="Image de l'article à afficher">
        <h3>Description de l'article : </h3>
        <p><?= $descrArticle ?></p>
        <p>Prix : <?= $prixArticle ?> €</p>
        <a href="#"><img src="../view/img/panier.png" alt="">Ajouter au panier !</a>
      </section>
    </div>
  </body>
</html>

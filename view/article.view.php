<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/style/article.css">
    <!-- <link rel="stylesheet" href="style/article.css"> -->
  </head>
  <body>
    <header>
      <div class="">
        <img src="../view/img/logo.png" alt="Logo du site chez violette">
        <h1>Chez Violette</h1>
      </div>
      <a href="#"> <img src="../view/img/panier.png" alt="image de panier"></a>
    </header>
    <div class="container">
      <nav>
        <?php foreach ($categories as $key => $value): ?>
          <ul>
            <li><a href="#"><?= $value->getNom(); ?></a></li>
          </ul>
        <?php endforeach; ?>
      </nav>
      <section>
        <h2><?= $titreArticle ?></h2>
        <img src="<?= $imgArticle ?>" alt="Image de l'article à afficher">
        <p><?= $descrArticle ?></p>
        <p>Prix : <?= $prixArticle ?></p>
        <a href="#"><img src="../view/img/panier.png" alt="">Ajouter au panier !</a>
      </section>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/style/artcle.css">
    <link rel="stylesheet" href="style/artcle.css">
  </head>
  <body>
    <header>
      <div class="">
        <img src="../view/img/logo.png" alt="Logo du site chez violette">
        <h1>Chez Violette</h1>
      </div>
      <img src="../view/img/panier.png" alt="image de panier">
    </header>
    <nav>
      <?php foreach ($categories as $key => $value): ?>
        <ul>
          <li><?php $value ?></li>
        </ul>
      <?php endforeach; ?>
    </nav>
    <section>
      <img src="<?= $imgArticle ?>" alt="Image de l'article à afficher">
    </section>
  </body>
</html>

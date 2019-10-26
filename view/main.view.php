<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chez Violette</title>
    <link rel="stylesheet" href="../view/css/main.view.css">
  </head>
  <body>
    <?// include "../view/header.view.php"?>
    <?// include "../view/nav.view.php" ?>
    <section>
      <?php foreach ($article as $key => $value) {
        echo "<div><p>";
        echo "<a href = \"article.ctrl.php?article=".$value->getRef()."\">";
        echo "<img src=\"../data/img/".$value->getImage()."\"><br>";
        echo $value->getLibelle();
        echo "</a>";
        echo "</p>";
        echo "</div> \n";
      } ?>
    </section>

    <footer></footer>
  </body>
</html>

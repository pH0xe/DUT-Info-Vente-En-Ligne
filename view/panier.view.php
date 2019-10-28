<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if($vide){ ?>
      <p>Panier vide</p>
    <?php }else{ ?>
  <?php  foreach ($_SESSION['panier']['article'] as $key => $value) { ?>
      <div class="article">
          <p><?= $value->getLibelle()?> x<?= $_SESSION['panier']['quantite'][$key]?> <?php $panier->boutonSupprimer($value->getRef()); ?></p>
      </div>
  <?php  } $panier->boutonVider();} ?>
  </body>
</html>

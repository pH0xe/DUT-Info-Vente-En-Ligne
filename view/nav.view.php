<nav>
  <ul>
  <?php foreach ($categories as $key => $value): ?>
    <li><a href="main.ctrl.php?categorie=<?= $value->getId()  ?>"><?= $value->getNom(); ?></a></li>
  <?php endforeach; ?>
  </ul>
</nav>

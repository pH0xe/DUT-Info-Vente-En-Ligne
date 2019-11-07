<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/style/header.css">
    <link rel="stylesheet" href="../view/style/nav.css">
    <link rel="stylesheet" href="../view/style/renseignement.css">
    <title>Chez Violette</title>
</head>
<body>
    <?php include "../view/header.view.php" ?>

    <?php include "../view/nav.view.php" ?>
    <form action="acheter.ctrl.php">
        <input type="hidden" name="etat" value="fin">

        <label for="nom">Votre nom :* </label>
        <input type="text" placeholder="Nom" id="nom" name="nom" required> <br>

        <label for="prenom">Votre prénom :*</label>
        <input type="text" name="prenom" id="prenom" placeholder="prénom" required> <br>

        <label for="mail">Votre mail :* </label>
        <input type="email" placeholder="Email" id="mail" name="mail" required> <br>

        <label for="carte">Votre numeros de carte :*</label>
        <input type="password" id="carte" placeholder="n° carte"> <br>

        <label for="crypt">Votre 3 numeros de cryptogramme :*</label>
        <input type="password" id="crypt" placeholder="cryptogramme"> <br>

        <input type="checkbox" name="pub" id="pub">
        <label for="pub" id="labPub">Cocher pour accepter de recevoir de la publicité de notre part</label>



        <button type="submit">Valider, passer la commande</button>
    </form>
</body>
</html>

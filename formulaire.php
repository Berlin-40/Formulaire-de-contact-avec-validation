<?php

    $confirm = isset($confirm) ? $confirm :"";
    $erreurs = isset($erreurs) ? join("|",$erreurs) :"";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
  <title>Formulaire contact</title>
  <script src="js/validation.js" defer></script>
</head>
<body>
  <h1>Formulaire de contact</h1>

  <section>
    <p id="erreur" style="color:red;"><?= $erreurs ?></p>
    <p id="confirm" style="color:green;"><?=  $confirm ?></p>

    <form id="contactForm" action="traitement.php" method="POST">
        
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea><br><br>

        <button type="submit">Envoyer</button>

    </form>


  </section>
  
</body>
</html>
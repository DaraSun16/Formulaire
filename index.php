<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="traitement.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br><br>

  <label for="email">Email :</label>
  <textarea id="email" name="email" required></textarea><br><br>

  <label for="pays">Pays :</label>
  <select id="pays" name="pays">
    <option value="">Sélectionner un pays</option>
    <option value="France">France</option>
    <option value="Belgique">Belgique</option>
    <option value="Suisse">Suisse</option>
  </select><br><br>

  <input type="submit" value="Envoyer">
  <input type="reset" value="Réinitialiser">
</form>

  
</body>
</html>
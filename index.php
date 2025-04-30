<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

<fieldset>
<legend>Formulaire de contact</legend>
<p>Veuillez remplir le formulaire ci-dessous :</p>
<form action="traitement.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br><br>

  <label for="message">Message :</label>
  <textarea id="message" name="message" required></textarea><br><br>

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
</fieldset>
<br><br><br>


<form class="container mt-5 border border-2 border-dark bg-dark text-light" action="traitement.php" method="post">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom: </label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>
  <div class="mb-3">
    <label for="Message" class="form-label">Message: </label>
    <input type="message" class="form-control" id="message" name="message" required>
  </div>
  <div class="mb-3 form-check">
    <select class="form-select" aria-label="Pays" id="pays" name="pays">
    <option selected>Pays</option>
    <option value="1">France</option>
    <option value="2">Japon</option>
    <option value="3">Corée</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
  <button type="reset" class="btn btn-secondary mb-3">Reset</button>
</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
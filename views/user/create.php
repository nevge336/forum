<h1>Créer un utilisateur</h1>
<form action="store-user.php" method="post">

  <label for="name">Nom :</label>
  <input type="text" id="name" name="name" required>
  
  <label for="username">Courriel :</label>
  <input type="email" id="username" name="email" required>
  
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password" required>
  
  <input type="submit" value="Enregistrer">
</form>


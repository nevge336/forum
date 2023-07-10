<h1>Créer un compte</h1>
<form action="?module=user&action=store" method="post">

  <label for="userName">Nom :</label>
  <input type="text" id="userName" name="name" required>
  
  <label for="userUsername">Courriel :</label>
  <input type="email" id="userUsername" name="userUsername" required>
  
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password" required>

  <label for="birthday">Date de naissance :</label>
  <input type="date" id="birthday" name="birthday" required>
  
  <input type="submit" value="Créer">
</form>


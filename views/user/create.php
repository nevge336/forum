<h1>Créer un compte</h1>

<form class="maxwidth20ch" action="?module=user&action=store" method="post">

  <label for="name">Nom :</label>
  <input type="text" id="user" name="name" required>
  
  <label for="username">Courriel :</label>
  <input type="email" id="username" name="username" required>
  
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password" required>

  <label for="birthday">Date de naissance :</label>
  <input type="text" id="birthday" name="birthday" required>
  
  <input type="submit" value="Créer">
</form>


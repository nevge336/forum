
<h1>Modifier un article</h1>
<form action="?module=article&action=update" method="post">

  <label for="title">Titre :</label>
  <input type="text" id="title" name="title" required>
  
  <label for="text">Texte :</label>
  <textarea id="text" name="text" rows="4" maxlength="1000" required></textarea>
  
  <label for="date">Date :</label>
  <input type="date" id="date" name="date" required>
  
  <input type="submit" value="Soumettre">
</form>

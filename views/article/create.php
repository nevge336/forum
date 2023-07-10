<h1>Créer un article</h1>

<form action="?module=article&action=store" method="post">

  <label for="title">Titre :</label>
  <input type="text" id="title" name="title" required>
  
  <label for="post">Texte :</label>
  <textarea id="post" name="post" rows="4" maxlength="1000" required></textarea>
  
  <label for="date">Date :</label>
  <input type="date" id="date" name="date" required>
  
  <input type="submit" value="Soumettre">
</form>

  

</form>
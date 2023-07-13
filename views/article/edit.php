
<h1>Modifier un article</h1><nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=index">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>

<form action="?module=article&action=edit" method="post">
  <input type="hidden" name="articleId" value="<?php echo $data['article']['articleId'];?>">
  
  <label>Titre :</label>
  <input type="text" id="title" name="title" required>
  
  <label>Texte :</label>
  <textarea id="text" name="post" rows="4" maxlength="1000" required></textarea>
  
  <label>Date :</label>
  <input type="text" id="date" name="date" required>
  
  <input type="submit" value="Soumettre">
</form>

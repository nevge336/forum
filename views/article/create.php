
<h1>Créer un article</h1>
<nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=index">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>
<form class="maxwidth40ch" action="?module=article&action=store" method="post">
<input type="hidden" name="userId" value="<?php echo $data['user']['userId'];?>">

  <label for="title">Titre :</label>
  <input type="text" id="title" name="title" required>
  
  <label for="post">Texte :</label>
  <textarea id="post" name="post" rows="15" maxlength="1000" required></textarea>
  
  <label for="date">Date :</label>
  <input type="date" id="date" name="date" required>
  
  <input type="submit" value="Soumettre">
</form>
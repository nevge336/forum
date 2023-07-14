
<h1>Modifier un article</h1><nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=userindex">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>

<form class="maxwidth40ch" action="?module=article&action=update" method="post">
  <input type="hidden" name="articleId" value="<?= $data['articleId']; ?>">
  
  <label for="title">Titre :</label>
  <input type="text" id="title" name="title" value="<?= $data['title']?>">

  <label for="post">Texte :</label>
  <input type="text" id="post" name="post" value="<?= $data['post']?>">
  
  
  
  <label for="date">Date :</label>
  <input type="date" id="date" name="date" value="<?= $data['date']?>">
  
  <input type="submit" value="Modifier">
</form>

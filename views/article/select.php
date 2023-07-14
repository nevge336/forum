
<h1>Liste de vos publications</h1>
<nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=userindex">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Modifier</th>
            <th>Effacer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) {?>

            <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><a href="?module=article&action=show&id=<?php echo $row['articleId']; ?>">Editer</a></td>
                <td><a href="?module=article&action=delete&id=<?php echo $row['articleId']; ?>">Effacer</a></td>
            </tr>

            <?php } ?>
        
        
    </tbody>
</table>

<h1>Liste de vos publications</h1>
<nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=index">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) {?>

            <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['date']; ?></td>
                
            </tr>

            <?php } ?>
        
        
    </tbody>
</table>
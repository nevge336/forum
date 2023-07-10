<h1>Liste des articles</h1>
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
                <td><a href="?module=article&action=show&id=<?= $row['id'] ?>">Edit</a></td>
            </tr>

            <?php } ?>
        
        
    </tbody>
</table>
<h2>Liste des villes</h2>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nom de la ville</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) {?>

            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['cityName']; ?></td>
                <td><a href="?module=city&action=show&id=<?= $row['id'] ?>">Edit</a></td>
            </tr>

            <?php } ?>
        
        
    </tbody>
</table>
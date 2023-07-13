<h1>Liste des utilisateurs</h1>


<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Courriel</th>
            <th>Naissance</th>
            <th>Editer</th>
            <th>Effacer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo date_format(date_create($row['birthday']),"Y/m/d") ?></td>
                
                <td>
                    <a href="?module=user&action=view&id=<?php echo $row['userId']; ?>">Editer</a></td>
                <td>
                    <form action="?module=user&action=delete" method="post"><input type="hidden" name="userId" value="<?php echo $row['userId'] ?>"><input type="submit" value="Effacer">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>



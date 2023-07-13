
<h1>Bienvenue!</h1>
<h2>Le forum des étudiants du Collège de Maisonneuve</h2>

<div class="box">
    <?php foreach($data as $row) {?>
        <div>
            <div class="box-box">
                <small>auteur: <?= $row['name'] ?></small>
                <small><?= $row['date'] ?></small>
            </div>
            <h3><?= $row['title'] ?></h3>
            <p><?= $row['post'] ?></p>
        </div>
    <?php } ?>
</div>
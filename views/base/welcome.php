
<h1>Bienvenue!</h1>
<h2>Le forum des étudiants du Collège de Maisonneuve</h2>

<div class="box">
    <?php foreach($data as $row) {?>
        <div class= "box-box">
            <small><?= $row['date'] ?></small>
            <h3><?= $row['title'] ?></h3>
            <p><?= $row['post'] ?></p>
        </div>
    <?php } ?>
</div>
        
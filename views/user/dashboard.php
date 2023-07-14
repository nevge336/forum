<h1>Bienvenue <?php echo $_SESSION['name']; ?>!</h1>

<h2>Tableau de bord</h2>

<nav>
    <div class="bouton">
        <a href="?module=article&action=create">Créer un article</a>
        <a href="?module=article&action=userindex">Liste de vos publications</a>
        <a href="?module=user&action=logout">Logout</a>
    </div>
</nav>

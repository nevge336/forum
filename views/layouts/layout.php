<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="?module=user&action=index">Lister les utilisateurs</a></li>
            <li><a href="?module=user&action=create">Ajouter un utilisateur</a></li>
        </ul>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
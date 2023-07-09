<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
    <nav>
        
        <div class="menu">
            <picture>
                <a href="index.php"><img src="./resources/img/logo-forum.svg" alt="logo"></a>
            </picture>
            <div>
                <a href="index.php">Accueil</a>
                <a href="?module=user&action=index">Lister les utilisateurs</a>
                <a href="?module=user&action=create">Ajouter un utilisateur</a>
            </div>
        </div>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
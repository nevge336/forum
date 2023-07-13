<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum de Maisonneuve</title>
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
    <nav>
        
        <div class="menu">
            <header>
                <a href="index.php">
                    <img src="./resources/img/logo-forum.svg" alt="logo">
                </a>
                <p>Forum de Maisonneuve</p>
            </header>
            <div>
                <a href="index.php">Accueil</a>
                          
                <a href="?module=user&action=create">Créer un compte</a>
                <a href="?module=user&action=dashboard">Mon espace</a>
               
            </div>
        </div>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
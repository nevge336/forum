<h1>Connexion</h1>

<?php if (isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
<?php } ?>

<form action="?module=user&action=authentication" method="post">

    <label for="username">Nom d'utilisateur : (courriel)</label>
    <input type="email" id="username" name="username" required>
    
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    
    <input type="submit" value="Se connecter">
    
</form>
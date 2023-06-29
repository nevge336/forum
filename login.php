<?php

$msg = null;

if(isset($_GET['msg'])){
    if($_GET['msg']==1){
        $msg = "Le nom d'utilisateur n'existe pas";
    }
    if($_GET['msg']==2){
        $msg = "Vérifiez le mot de passe";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <style>
        input, select {
            display: block;
            margin: 5px;
        }
        .error, span{
            color: red;
        }
        
    </style>
</head>
<body>
    <h1>Login</h1>
    <span><?= $msg ?></span>
    <form action="authentication.php" method="post">
        <label>Username
            <input type="email" name="username" maxlength="50"> 
        </label>
        <label>Password
            <input type="password" name="password" minlength="6" maxlength="20" >
        </label>
        </label>
        <input type="submit" value="Login">
    </form>


</body>
</html>
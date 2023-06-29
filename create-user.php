
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
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>User</h1>
    <form action="store-user.php" method="post">
    <label>Nom
            <input type="text" name="name" maxlength="45" > 
 
        </label>
        <label>Username
            <input type="email" name="username" maxlength="50"> 
        </label>
        <label>Password
            <input type="password" name="password" minlength="6" maxlength="20" >
        </label>
        </label>
        <input type="submit" value="Save">


    </form>


</body>
</html>
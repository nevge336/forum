<?php


require_once('db/connex.php');

foreach($_POST as $key=>$value) {
    $$key=mysqli_real_escape_string($connex, $value);
}

//01 - check username
$sql = "select * from user where username = '$username'";
$result = mysqli_query($connex, $sql);


//il n'y a qu'un seul username | pour vérifier si qqch existe
$count = mysqli_num_rows($result);

// 02 - la réponse doit être égale à un
if($count == 1) {
    //03 - check password saisit avec la base de données
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dbPassword = $user['password'];
    //echo $password. " == " .$dbPassword; 
    
    if(password_verify($password, $dbPassword)) {
        // etape 04
        echo 'ok';
    }else{
        header("Location: login.php?msg=2");
    }


}else{
    header("Location: login.php?msg=1");
    
}


?>
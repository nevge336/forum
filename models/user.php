<?php


function user_model_store($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key=mysqli_real_escape_string($connex, $value);
    }
    
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (name, username, password, birthday) values ('$name', '$username', '$password', '$birthday')";
    
    //code de montrer erreur : pas obligatoire sauf que ca aide!
    if(mysqli_query($connex, $sql)){
        render(VIEW_DIR.'/user/login.php');
    } else {
        render(VIEW_DIR.'/base/error.php');
    }
    mysqli_close($connex);
} 



function user_model_userid(){
    require(CONNEX_DIR);
    $sql = "SELECT userId FROM user";
    $result  = mysqli_query($connex, $sql);
    $result = mysqli_fetch_assoc($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}



function user_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM user ORDER BY userId";
    $result  = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}



function user_model_authentication($request) {
    require(CONNEX_DIR);
    foreach($_REQUEST as $key=>$value) {
        $$key=mysqli_real_escape_string($connex, $value);
    }
    
    //01 - check username 
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connex, $sql);
    
    //il n'y a qu'un seul username | pour vérifier si qqch existe
    $count = mysqli_num_rows($result);
    
    // 02 - la réponse doit être égale à un
    if($count == 1) {
        //03 - check password saisit avec la base de données
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $dbPassword = $user['password'];
        
        if(password_verify($password, $dbPassword)) {
            session_regenerate_id();
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $salt = '%442@5435H*#4s23!';
            $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'].$salt);
            return true;
        } else {
            return "Mot de passe incorrect";
        }
   } else {
        return "Nom d'utilisateur incorrect";
   }
}


function user_model_logout($request) {
    session_destroy();
    render(VIEW_DIR);
}

function user_model_checksession($request) {
    require(CONNEX_DIR);
    if(isset($_SESSION['finger_print']) && $_SESSION['finger_print'] === md5($_SERVER['HTTP_USER_AGENT'].$_SERVER
    ['REMOTE_ADDR'].'%442@5435H*#4s23!')) {
        $name_session = $_SESSION['name'];
    } else {
        header("Location: ?module=user&action=login");
        die();
    }
    mysqli_close($connex);
}







?>

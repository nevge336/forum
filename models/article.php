<?php



function article_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT date, name, title, post FROM article inner join user on articleUserId = userId ORDER BY date desc;";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}


/* Utilisé pour lister les articles d'un seul utilisateur connecté*/
function article_model_userlist() {
    require(CONNEX_DIR);
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM article WHERE articleUserId = $id";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}



function article_model_store($request) {
    require(CONNEX_DIR);
    $id = $_SESSION['id'];
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO article (title, post, date, articleUserId) VALUES ('$title', '$post', '$date', '$id')";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}



function article_model_view($request) {
    require(CONNEX_DIR);
    $id = $_SESSION['id'];
    $articleUserId = mysqli_real_escape_string($connex, $request['articleUserId']);
    $sql = "select * from article where articleUserId = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($connex);
    return $result;
}



function article_model_show($request){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    $sql = "SELECT * FROM article WHERE articleId = '$id'";
    $result  = mysqli_query($connex, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($connex);
    return $result;
}



function article_model_update($request){
    require(CONNEX_DIR);
    $id = $_SESSION['id'];
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE article SET title = '$title', post = '$post', date = '$date', articleUserId = '$id'  WHERE articleId = '$articleId'";
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex);
}



function article_model_delete($request){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "DELETE FROM article WHERE articleId = '$id'";
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex);
}



?>
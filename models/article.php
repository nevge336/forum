<?php

function article_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT date, name, title, post FROM article inner join user on articleUserId = userId;";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}



function article_model_userlist(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM article ORDER BY DATE";
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

function article_model_edit($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "update article set title='$title', post='$post', date='$date', articleUserId = '$articleUserId' where
    articleId = '$articleId'";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

function article_model_delete($request) {
    require(CONNEX_DIR);
    $userId = mysqli_real_escape_string($connex, $_POST['userId']);
    $sql = "delete from article where articleId='$articleId'";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}


?>
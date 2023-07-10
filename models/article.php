<?php

function article_model_list(){
    require(CONNEX_DIR);
    $sql = "select * from article order by date";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}

function article_model_store($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "insert into article values ('$title', '$post', '$date', '$articleUserId')";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);

}

function article_model_show($request) {
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    $sql = "select * from article where id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($connex);
    return $result;

}

function article_model_update($request) {

}


?>
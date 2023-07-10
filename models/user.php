<?php


function user_model_store($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "insert into article_user values ('$name', '$username', '$password', '$birthday')";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}


?>
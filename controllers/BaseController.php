<?php

function base_controller_index($request) {
    require_once(MODEL_DIR.'/article.php');
    $data =  article_model_list();
    require_once(MODEL_DIR.'/user.php');
    render(VIEW_DIR.'/base/welcome.php', $data);
}

function base_controller_error($request) {
    render(VIEW_DIR. '/base/error.php');
}








?>
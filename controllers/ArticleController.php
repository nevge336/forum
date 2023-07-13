<?php



function article_controller_create(){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    render(VIEW_DIR.'/article/create.php');
}



function article_controller_store($request){
    require_once(MODEL_DIR.'/article.php');
    article_model_store($request);
    require_once(MODEL_DIR.'/user.php');
    user_model_store($request);
    //print_r($request);
    //header("Location: ?module=user&action=index");
}


function article_controller_index(){

}



function article_controller_userindex(){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    require_once(MODEL_DIR.'/article.php');
    $data =  article_model_list();
    render(VIEW_DIR.'/article/select.php', $data);
}



function article_controller_view($request){
    //return print_r($request);
    require_once(MODEL_DIR.'/article.php');
    $data = article_model_view($request);
    //print_r($data);
    render(VIEW_DIR.'/article/select.php', $data);
}



function article_controller_edit($request) {
    require_once(MODEL_DIR.'/article.php');
    article_model_edit($request);
    header("Location: ?module=article&action=index");
}



function article_controller_delete($request) {
    require_once(MODEL_DIR.'/article.php');
    user_model_delete($request);
    header("Location: ?module=article&action=index");
}

?>
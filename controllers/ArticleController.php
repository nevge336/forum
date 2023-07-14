<?php



function article_controller_create($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        render(VIEW_DIR.'/article/create.php');
    } else {
        header("Location: ?module=user&action=login");
    }
}



function article_controller_store($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        article_model_store($request);
        //print_r($request);
        header("Location: ?module=article&action=userindex");
    } else {
        header("Location: ?module=user&action=login");
    }
}



function article_controller_index($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        $data =  article_model_list();
        render(VIEW_DIR.'/article/select.php', $data);
     } else {
        header("Location: ?module=user&action=login");
     }
}



function article_controller_userindex($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        $data =  article_model_userlist();
        render(VIEW_DIR.'/article/select.php', $data);
     } else {
        header("Location: ?module=user&action=login");
     }
}



function article_controller_show($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        $data = article_model_show($request);
        render(VIEW_DIR.'/article/edit.php', $data);
    } else {
        header("Location: ?module=user&action=login");
    }
}




function article_controller_update($request){
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        article_model_update($request);
        header("Location: ?module=article&action=userindex");
    } else {
        header("Location: ?module=user&action=login");
    }
}




function article_controller_delete($request) {
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    if ($result) {
        require_once(MODEL_DIR.'/article.php');
        article_model_delete($request);
        header("Location: ?module=article&action=userindex");
    } else {
        header("Location: ?module=user&action=login");
    }
    
}





?>
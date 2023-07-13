<?php



function user_controller_index(){
    require_once(MODEL_DIR.'/user.php');
    $data =  user_model_list();
    render(VIEW_DIR.'/user/select.php', $data);
}



//formulaire
function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}



//post du formulaire
function user_controller_store($request){
    require_once(MODEL_DIR.'/user.php');
    user_model_store($request);
    render(VIEW_DIR.'/user/login.php');
}




function user_controller_login($request) {
    require_once(MODEL_DIR.'/user.php');
    render(VIEW_DIR.'/user/login.php');
}
    



function user_controller_authentication($request) {
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_authentication($request);
    if($result == true) {
        header("Location: ?module=user&action=dashboard");
        exit();
    } else {
        $error_message = $result;
        include '/login.php';
        exit();
    } 
}



function user_controller_dashboard($request) {
    require_once(MODEL_DIR.'/user.php');
    $result = user_model_checksession($request);
    render(VIEW_DIR.'/user/dashboard.php');
}



function user_controller_logout($request) {
    require_once(MODEL_DIR.'/user.php');
    user_model_logout($request);
}



    
    
?>
<?php

function base_controller_index($request) {
   
    render(VIEW_DIR.'/base/welcome.php');
}

function base_controller_error($request) {
    render(VIEW_DIR. '/base/error.php');
}








?>
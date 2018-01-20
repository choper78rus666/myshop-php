<?php
include "reader_model.php";
include "check_model.php";

function authUser() {
    $post = $_POST;
    $user_data = check_data($post['auth_data']);
    $all_users = getAllUsers();

    foreach($all_users as $value) {
       if ($value['login'] == $user_data['login']) {
            if ($value['pwd'] == $user_data['pwd']) {
                echo $value['state'];
                return true;
            }
            echo 'pwd is wrong';
            return false;
        }
    }
    echo 'user not found';
    return false;
}

authUser();
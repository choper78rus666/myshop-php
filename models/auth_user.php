<?php
include "reader_model.php";
include "check_model.php";

function authUser() {
    $post = $_POST;
    $user_data = check_data($post['auth_data']);
    $all_users = getAllUsers();

    foreach ($all_users as $value) {
        if ($all_users['login'] == $user_data['login']) {
            if ($all_users['pwd'] == $user_data['pwd']) {
                echo $all_users['state'];
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
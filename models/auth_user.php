<?php
session_start();
include "reader_model.php";
include "check_model.php";

function authUser() {
    $post = $_POST;
    $user_data = check_data($post['auth_data']);
    $all_users = getAllUsers();

    foreach($all_users as $value) {
       if ($value['login'] == $user_data['login']) {
            if (password_verify($user_data['pwd'], $value['pwd'])) {
                $_SESSION['auth'] = $value['state'];
                $_SESSION['login'] = $value['login'];
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

if(isset($_POST['auth_data'])){
    authUser();
}

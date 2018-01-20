<?
include "reader_model.php";
include "check_model.php";

function reg_user(){
    $post = $_POST;
    $user_data = check_data($post['user_data']);
    $all_users = getAllUsers();

    foreach ($all_users as $value) {
        if ($all_users['login'] == $user_data['login']) {
            echo 'user enabled';
            return;
        }
    }
            
    if(!$user_data or !addDataToFile($user_data, '../files/users_lst.txt')){
        echo 'not adds';
    } else {
        echo 'user add';
    } 
        
}

reg_user();

?>
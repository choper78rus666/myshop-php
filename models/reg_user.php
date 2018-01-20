<?
include "reader_model.php";
include "check_model.php";

function reg_user(){
    $post = $_POST;
    $user_data = check_data($post['user_data']);
    $all_users = getAllUsers();
    
    if(isset($all_users)){
        foreach($all_users as $value) {
            if ($value['login'] == $user_data['login']) {
                echo 'user enabled';
                return;
            }
        }

    } else {
        $all_users = [];
    }
    
    array_push($all_users, $user_data);
    $user_data = $all_users;
    
    if(!$user_data or !addDataToFile($user_data, '../files/users_lst.txt')){
        echo 'not adds';
    } else {
        echo 'user add';
    } 
        
}

reg_user();

?>
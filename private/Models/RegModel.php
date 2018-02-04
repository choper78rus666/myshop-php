<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\Models\ReaderModel;

class RegModel {
    
    function reg_user($user_data){
        $reader = new ReaderModel();
        $all_users = $reader->getAllUsers();

        if(!empty($all_users)){
            foreach($all_users as $value) {
                if ($value['login'] == $user_data['login']) {
                    return 'user enabled';
                }
            }

        } else {
            $all_users = [];
        }

        $user_data['pwd'] = password_hash($user_data['pwd'], PASSWORD_DEFAULT);
        array_push($all_users, $user_data);
        $user_data = $all_users;

        if(!$user_data or !$reader->addDataToFile($user_data, '../private/files/users_lst.txt')){
            return 'not adds';
        } else {
            return 'user add';
        }

    }
}
?>
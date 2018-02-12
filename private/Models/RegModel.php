<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class RegModel {
    
    function reg_user($user_data){
        $db = new DB();
        $all_users = $db->getAccount($user_data['login']);

        if ($all_users) {
            return 'user enabled';
        }
        
        $user_data['pwd'] = password_hash($user_data['pwd'], PASSWORD_DEFAULT);
        if(!$user_data or !$db->addAccount($user_data)){
            return 'not adds';
        } else {
            return 'user add';
        }

    }
}
?>
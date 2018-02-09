<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class AuthModel {
    
    function authUser($user_data) {
        session_start();
        
        $db = new DB();
        $all_users = $db->getAccount($user_data['login']);

        
           if ($all_users['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $all_users['pwd'])) {
                    $_SESSION['auth'] = $all_users['state'];
                    $_SESSION['login'] = $all_users['login'];
                    return $all_users['state'];
                }
               
                return 'pwd is wrong';
            }
        
        return 'user not found';
    }
    
    /*
    function authUser($user_data) {
        session_start();
        
        $reader = new ReaderModel();
        $all_users = $reader->getAllUsers();

        foreach($all_users as $value) {
           if ($value['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $value['pwd'])) {
                    $_SESSION['auth'] = $value['state'];
                    $_SESSION['login'] = $value['login'];
                    return $value['state'];
                }
               
                return 'pwd is wrong';
            }
        }
        return 'user not found';
    }
    */
}
?>
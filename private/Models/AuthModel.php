<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class AuthModel {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    function authUser($user_data) {
        session_start();
        
        $all_users = $this->db->getAccount($user_data['login']);

        
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
}
?>
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
        
        $user = $this->db->getAccount($user_data['login']);

        
           if ($user['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $user['pwd'])) {
                    if ($_SESSION['authVK'] === true){
                        $this->db->updAccountVK(['login' => $user['login'], 'id' => $_SESSION['login']]);
                        unset($_SESSION['authVK']);
                    }
                    $_SESSION['auth'] = $user['state'];
                    $_SESSION['login'] = $user['login'];
                    return $user['state'];
                }
               
                return 'pwd is wrong';
            }
        
        return 'user not found';
    }
}
?>
<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class AuthVKModel {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    function authUserVK($user_data) {
        session_start();
        
        $userVK = $this->db->getAccountVK($user_data['id']);
        
           if ($userVK['id'] === $user_data['id']) {
               if(!empty($userVK['login'])){
                    $user = $this->db->getAccount($userVK['login']);
                    $_SESSION['auth'] = $user['state'];
                    $_SESSION['login'] = $user['login'];
                    return $user['state'];
                } else {
                   // Войти под профилем ВК
                    $_SESSION['auth'] = 'user';
                    $_SESSION['login'] = $userVK['id'];
                    $_SESSION['authVK'] = true;
                    return 'user';
                }
                   
            } else {
               // нет профиля ВК - создаём
                if(!$this->db->addAccountVK($user_data)){
                    return 'not adds';
                } else {
                    $_SESSION['auth'] = 'user';
                    $_SESSION['login'] = $userVK['id'];
                    return 'user';
                }
            }
    }
}
?>
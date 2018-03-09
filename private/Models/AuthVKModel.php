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
        $sql = "SELECT * from accountsVK WHERE id = ?;";
        $userVK = $this->db->getSQL([$user_data['id']], $sql);
        
           if ($userVK['id'] === $user_data['id']) {
               if(!empty($userVK['login'])){
                    $sql = "SELECT * from accounts WHERE login = ?;";
                    $user = $this->db->getSQL([$userVK['login']], $sql);
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
                $sql = "INSERT INTO accountsVK (id, first_name, last_name, nickname) VALUES (:id, :first_name, :last_name, :nickname);";
                if(!$this->db->addSQL($user_data, $sql)){
                    return 'not adds';
                } else {
                    $_SESSION['auth'] = 'user';
                    $_SESSION['login'] = $userVK['id'];
                    $_SESSION['authVK'] = true;
                    return 'user';
                }
            }
    }
}
?>
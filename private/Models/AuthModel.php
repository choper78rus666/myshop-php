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
       
        $sql = "SELECT * from accounts WHERE login = ?;";
        $user = $this->db->getSQL([$user_data['login']], $sql);

        
           if ($user['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $user['pwd'])) {
                    if ($_SESSION['authVK'] === true){
                        $sql = "UPDATE accountsVK SET login = :login WHERE id=:id;";
                        $this->db->addSQL(['login' => $user['login'], 'id' => $_SESSION['login']], $sql);
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
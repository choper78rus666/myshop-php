<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class RegModel {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    function reg_user($user_data){
        $sql = "SELECT * from accounts WHERE login = ?;";
        $user = $this->db->getSQL([$user_data['login']], $sql);

        if ($user) {
            return 'user enabled';
        }
        
        $user_data['pwd'] = password_hash($user_data['pwd'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO accounts (login, pwd, email, state) VALUES (:login, :pwd, :email, :state);
        INSERT INTO user_info (login) VALUES (:login);
        ";
        
        if(!$user_data or !$this->db->addSQL($user_data, $sql)){
            return 'not adds';
        } else {
            return 'user add';
        }

    }
}
?>
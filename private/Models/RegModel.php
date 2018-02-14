<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class RegModel {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    function reg_user($user_data){
        $all_users = $this->db->getAccount($user_data['login']);

        if ($all_users) {
            return 'user enabled';
        }
        
        $user_data['pwd'] = password_hash($user_data['pwd'], PASSWORD_DEFAULT);
        if(!$user_data or !$this->db->addAccount($user_data)){
            return 'not adds';
        } else {
            return 'user add';
        }

    }
}
?>
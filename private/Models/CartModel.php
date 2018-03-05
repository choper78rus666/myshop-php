<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class CartModel {
    
    private $db;
    
    public function __construct(){
        $this->db = new DB();
    }
    
    function getCartItem($item_id){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login'],
            'item_id' => $item_id
        ];
        
        $sql = "SELECT count FROM cart WHERE (session_id=:session_id OR login=:login) AND item_id=:item_id ;";
        return $this->db->getSQL($params, $sql);
    }
    
    function addCart($item_id){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login'],
            'item_id' => $item_id,
            'count' => NULL
        ];
        
        $params['count'] = $this->getCartItem($item_id)['count'];
        if(isset($params['count'])){
            $params['count']++;
            $login = empty($_SESSION['login']) ? '' : ",login=:login";
            $sql = "UPDATE cart SET session_id=:session_id, count=:count ".$login." WHERE (session_id=:session_id OR login=:login) AND item_id=:item_id ;";
        } else {
            $params['count'] = 1;
            $sql = "INSERT INTO cart (session_id, login, item_id, count) VALUES (:session_id, :login, :item_id, :count);";
        }
        
        $this->db->addSQL($params, $sql);
        return $params['count'];
    }
   
    
}
?>
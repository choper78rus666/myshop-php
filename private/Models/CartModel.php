<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\DBConnector\DB;

class CartModel {
    
    private $db;
    
    public function __construct(){
        $this->db = new DB();
    }
    
    function clearCart($interval){
        $params = [
            'time' => (time() - $interval*60)
        ];
        
        $sql = "DELETE FROM cart_item WHERE id_cart = (SELECT id_cart FROM cart WHERE UNIX_TIMESTAMP(last_time) < :time LIMIT 1);";
        $this->db->addSQL($params, $sql);
    }
    
    function getCartId(){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login']
        ];
        $sql = "SELECT id_cart FROM cart WHERE session_id=:session_id OR login=:login;";
        return $this->db->getSQL($params, $sql);
    }
    
    function getCartItem($item_id){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login'],
            'item_id' => $item_id
        ];
        
        $sql = "SELECT cart_item.count FROM cart_item, cart WHERE (cart.session_id=:session_id OR cart.login=:login) AND cart_item.id_cart=cart.id_cart AND cart_item.item_id=:item_id ;";
        return $this->db->getSQL($params, $sql);
    }
    
    function addCartItem($item_id){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login'],
            'item_id' => $item_id,
            'count' => 1
        ];
        // Проверка на наличие товара в корзине
        $getCount = $this->getCartItem($item_id);
        if($getCount != false){
            // Есть товар - обновляем количество
            $params['count'] += $getCount['count'];
            $this->updateCartItem($params);
        } else {
            // Нет товара, проверяем на наличие корзины у пользователя
            $getId = $this->getCartId();
            $params['id_cart']=$getId['id_cart'];
            if($getId == false){
                // Нет корзины, создаем новую
                $paramsCart = [
                    'session_id' => session_id(),
                    'login' => empty($_SESSION['login']) ? '': $_SESSION['login']
                ];
                $sql = "INSERT INTO cart (session_id, login) VALUES (:session_id, :login);";
                // Присваеваем ID новой корзины в параметры
                $this->db->addSQL($paramsCart, $sql);
                $params['id_cart'] = $this->getCartId()['id_cart'];
            }
            // Корзина есть - обновляем дату вложения товара, добавляем товар
            $login = empty($_SESSION['login']) ? '' : ",login=:login";
            if(empty($login)) unset($params['login']);
            
            $sql = "
            UPDATE cart SET last_time = CURRENT_TIMESTAMP ".$login." WHERE id_cart=:id_cart;
            INSERT INTO cart_item (id_cart, item_id, count) VALUES (:id_cart, :item_id, :count);";
            $this->db->addSQL($params, $sql);
        }
        
        return $this->getCartCountAllItem();
    }
   
    function updateCartItem($params){
        $login = empty($_SESSION['login']) ? '' : ",login=:login";
        $sql = "UPDATE cart_item, cart SET cart.last_time = CURRENT_TIMESTAMP, cart.session_id=:session_id, cart_item.count=:count ".$login." WHERE (cart.session_id=:session_id OR cart.login=:login) AND cart.id_cart = cart_item.id_cart AND cart_item.item_id=:item_id ;";
        $this->db->addSQL($params, $sql);
    }
    
    function getCartCountAllItem(){
        // Выводит общее количество предметов в корзине
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? '': $_SESSION['login']
        ];
        
        $sql = "SELECT SUM(cart_item.count) cart_count FROM cart_item, cart WHERE (cart.session_id=:session_id OR cart.login=:login) AND cart.id_cart = cart_item.id_cart;";
        
        $resault = $this->db->getSQL($params, $sql)['cart_count'];
        
        return isset($resault) ? $resault: 0;
    }
    
    function getCartAllItems(){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? : $_SESSION['login']
        ];
        
        $sql = "SELECT catalog.id id, catalog.image image, catalog.title title, cart_item.count count, catalog.price*cart_item.count price , cart.last_time last_time FROM cart_item, cart, catalog WHERE (cart.session_id=:session_id OR cart.login=:login) AND cart.id_cart = cart_item.id_cart AND catalog.id = cart_item.item_id;";
        $resault = $this->db->getSQL($params, $sql, true);
        return isset($resault) ? $resault: 0;
    }
    
    function deleteItem($id){
        $params = [
            'session_id' => session_id(),
            'login' => empty($_SESSION['login']) ? : $_SESSION['login'],
            'item_id' => $id
        ];
        
        $sql = "DELETE FROM cart_item WHERE id_cart = (SELECT id_cart FROM cart WHERE session_id=:session_id OR login=:login) AND item_id = :item_id;";
        $this->db->addSQL($params, $sql);
    }
    
}
?>
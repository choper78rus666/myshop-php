<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Controllers\AccountController;
use Dmitriy\Shop\Models\CatalogModel;
use Dmitriy\Shop\Models\CartModel;
use Dmitriy\Shop\Base\GenerateResponse;

class CartController {
    private $item;
    private $account;
    
    public function __construct() {
        $this->item = new CatalogModel();
        $this->cart = new CartModel();
        $this->account = new AccountController();
    }
    
    function indexAction(){
        session_start();
        $this->cart->clearCart(5);
        $title = 'Корзина';
        $view_filename = 'cart.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item_cart' => $this->cart->getCartAllItems()
        ]);
    }
    
    function addAction(){
        session_start();
        
        if(isset($_POST['id_item'])){
            $post = $_POST;
            $id_item = $post['id_item'];
            
            $cart = $this->cart->addCartItem($id_item);
            $data = $this->item->getItem([$id_item]);
            echo $data['count'] - $data['cart_count'] > 0 ? $cart : -$cart;
        }
    }
    
    // Возвращает количество товаров в корзине у пользователя
    function getAllItemAction(){
        session_start();
        //Очищает корзину, если время хранения больше передаваемых параметров в мин.
        $this->cart->clearCart(5);
        echo $this->cart->getCartCountAllItem();
    }
    
    function deleteAction($get){
        session_start();
        if(isset($get)){
            $this->cart->deleteItem($get);
            header('Location: /cart');
        }
    }
    
}

?>
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
            
            echo $this->cart->addCartItem($id_item);
        }
    }
    
    function getAllItemAction(){
        session_start();
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
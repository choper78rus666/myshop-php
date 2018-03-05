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
    
    function addAction(){
        session_start();
        
        if(isset($_POST['id_item'])){
            $post = $_POST;
            $id_item = $post['id_item'];
            
            echo $this->cart->addCart($id_item);
        }
    }
    
    function indexAction(){
        $title = 'Каталог';
        $view_filename = 'catalog.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $this->item->getItem()
        ]);
    }
}

?>
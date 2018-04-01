<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\CatalogModel;
use Dmitriy\Shop\Base\GenerateResponse;

class IndexController {
    private $item;
    
    public function __construct() {
        $this->item = new CatalogModel();
    }
    
    function indexAction() {
        $post = $_POST;
        $list = isset($post['list']) ? $post['list'] > 1 ? $post['list']:1 : 1;
        $title = 'Главная';
        $view_filename = 'index_view.php'; // вид
        
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $this->item->getItem($list, 4),
            'list' => $list
        ]);
    }
}

?>
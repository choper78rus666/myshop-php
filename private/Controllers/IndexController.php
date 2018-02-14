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
        $title = 'Главная';
        $view_filename = 'index_view.php'; // вид
        
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $this->item->getItem()
        ]);
    }
}

?>
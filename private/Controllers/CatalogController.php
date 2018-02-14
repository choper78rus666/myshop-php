<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\CatalogModel;
use Dmitriy\Shop\Base\GenerateResponse;

class CatalogController {
    private $item;
    
    public function __construct() {
        $this->item = new CatalogModel();
    }
    
    function indexAction() {
        $title = 'Каталог';
        $view_filename = 'catalog.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $this->item->getItem()
        ]);
    }
    
    function itemAction($get) {
        
        if (!empty($get)) {
            // получаем массив с show по id из GET запроса
            $index = (int)$get-1;
            $title = 'Карточка товара';
            $view_filename = 'items.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $this->item->getItem($index)
            ]);
        }
    }
    
}
?>
<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\ShowsModel;

class CatalogController {
    
    function indexAction() {
        $title = 'Каталог';
        $view_filename = 'catalog.php';
        $item = new ShowsModel();
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $item->getItem()
        ]);
    }
    
    function itemAction($get) {
        
        if (!empty($get)) {
            // получаем массив с show по id из GET запроса
            $index = (int)$get-1;
            $title = 'Карточка товара';
            $view_filename = 'items.php';
            $item = new ShowsModel();
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $item->getItem($index)
            ]);
        }
    }
    
}
?>
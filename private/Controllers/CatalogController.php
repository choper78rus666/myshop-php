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
            $index = (int)$get;
            $title = 'Карточка товара';
            $view_filename = 'items.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $this->item->getItem($index)
            ]);
        }
    }
    
    function item_editAction($get) {
        
        if (!empty($get)) {
            // получаем массив с show по id из GET запроса
            $index = (int)$get;
            $title = 'Карточка товара';
            $view_filename = 'admin_account.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $this->item->getItem($index),
                'content' => 'item_edit.php'
            ]);
        }
    }
    
    function editAction($get) {
        
        if (empty($get)) {
            // получаем массив с show по id из GET запроса
            $index = (int)$get;
            $title = 'Редактирование каталога';
            $view_filename = 'admin_account.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $this->item->getItem(),
                'content' => 'items_edit.php'
            ]);
        }
    }
    
}
?>
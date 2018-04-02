<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Controllers\AccountController;
use Dmitriy\Shop\Models\CheckModel;
use Dmitriy\Shop\Models\CatalogModel;
use Dmitriy\Shop\Base\GenerateResponse;

class CatalogController {
    private $item;
    private $account;
    
    public function __construct() {
        $this->check = new CheckModel();
        $this->item = new CatalogModel();
        $this->account = new AccountController();
    }
    
    function indexAction() {
        $post = $_POST;
        $list = isset($post['list']) ? $post['list'] > 1 ? $post['list']:1 : 1;
        $title = 'Каталог';
        $view_filename = 'catalog.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $this->item->getItem($list, 10),
            'list' => $list,
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
                'item' => $this->item->getItem(1, 1, [$index])
            ]);
        }
    }
    
    function item_editAction($get) {
        $this->account->isAdmin();
        // Редактирование товара или добавление нового
        if (isset($get)) {
            // получаем массив с show по id из GET запроса
            $index = (int)$get;
            $title = 'Редактирование товара';
            $view_filename = 'admin_account.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $index > 0 ? $this->item->getItem(1, 1, [$index]): ['id' => 0],
                'content' => 'item_edit.php'
            ]);
        } echo 0;
    }
    
    function uploadAction(){
        $this->account->isAdmin();
        // загрузка картинки товара
        if(!empty($_FILES['file']['name'])){
            echo $this->item->uploadItem($_FILES);
        } else {
            echo "File not found";
        }
    }
    
    function edit_infoAction(){
        // Отправка отредактированных данных
        $this->account->isAdmin();
        if(isset($_POST['edit_info'])){
            $post = $_POST;
            $data = $this->check->check_data($post['edit_info']);
            if(!$data['id']){
                unset($data['id']);
                echo $this->item->addItem($data);
            } else {
                echo $this->item->updItem($data);
            }
        }
    }
    
    function editAction($get) {
        $this->account->isAdmin();
        // Открывает каталог для редактирования
        if (empty($get)) {
            $post = $_POST;
            $list = isset($post['list']) ? $post['list'] > 1 ? $post['list']:1 : 1;
            // получаем массив с show по id из GET запроса
            $index = (int)$get;
            $title = 'Редактирование каталога';
            $view_filename = 'admin_account.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'item' => $this->item->getItem($list, 10),
                'list' => $list,
                'content' => 'items_edit.php'
            ]);
        }
    }
    
    function deleteAction($get){
        $this->account->isAdmin();
        if(isset($get)){
            $this->item->deleteItem($get);
            header('Location: /catalog/edit');
        }
    }
    
}
?>
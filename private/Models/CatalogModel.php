<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\Models\FileModel;
use Dmitriy\Shop\DBConnector\DB;

class CatalogModel {
    private $fileModel;
    private $db;
    
    public function __construct(){
        $this->fileModel = new FileModel();
        $this->db = new DB();
    }
    
    function getItem($index = null){
        return !isset($index) ? $this->db->getItems() : $this->db->getItems($index);
    }
    
    function addItem($data){
        $this->db->addItem($data);
    }
    
    function updItem($data){
        return $this->db->updItem($data);
    }
    
    function uploadItem($path){
        return $this->fileModel->imageUpload($path, "../public/static/images/");
    }
    
    
    // Оставил , возможно пригодиться для добавление товаров с дампа
    
    //    function getItem($index = null){
//        $shows_json = $this->fileModel->getDataFromFile('../private/files/item_base.txt');
//        $shows_json .= ']';
//        $item = json_decode($shows_json, true);// преаброзуем JSON с true не в объекты
//        foreach($item as $value){
//            var_dump($value);
//            $this->db->additem($value);
//            
//        }
//        return !isset($index) ? $item : $item[$index];
//    }
}
?>
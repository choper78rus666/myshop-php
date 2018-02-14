<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\Models\ReaderModel;
use Dmitriy\Shop\DBConnector\DB;

class CatalogModel {
    private $reader;
    private $db;
    
    public function __construct(){
        $this->reader = new ReaderModel();
        $this->db = new DB();
    }
    
    function getItem($index = null){
        return !isset($index) ? $this->db->getItems() : $this->db->getItems($index);
    }
    
    function addItem($data){
        $this->db->additem($data);
    }
    
    
    // Оставил , возможно пригодиться для добавление товаров с дампа
    
    //    function getItem($index = null){
//        $shows_json = $this->reader->getDataFromFile('../private/files/item_base.txt');
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
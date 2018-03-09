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
    
    function getItem($index = NULL){
        $sql = "SELECT * FROM catalog" . (isset($index) ? " WHERE id = ?" : ";");
        return $this->db->getSQL($index, $sql);
    }
    
    function addItem($params){
        $sql = "INSERT INTO catalog (category, title, image, about, price, count) VALUES (:category, :title, :image, :about, :price, :count);";
        
        return $this->db->addSQL($params, $sql);
    }
    
    function updItem($params){
        $sql = "UPDATE catalog SET category=:category, title=:title, image=:image, about=:about, price=:price, count=:count WHERE id=:id;";
        
        return $this->db->addSQL($params, $sql);
    }
    
    function uploadItem($path){
        return $this->fileModel->imageUpload($path, "../public/static/images/");
    }
    
    function deleteItem($id){
        $params = [
            'id' => $id
        ];
        
        $sql = "DELETE FROM catalog WHERE id = :id";
        $this->db->addSQL($params, $sql);
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
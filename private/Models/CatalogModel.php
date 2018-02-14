<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\Models\ReaderModel;

class CatalogModel {
    private $reader;
    
    public function __construct(){
        $this->reader = new ReaderModel();
    }
    
    function getItem($index = null){
        $shows_json = $this->reader->getDataFromFile('../private/files/item_base.txt');
        $shows_json .= ']';
        $item = json_decode($shows_json, true);// преаброзуем JSON с true не в объекты
        
        return !isset($index) ? $item : $item[$index];
    }
}
?>
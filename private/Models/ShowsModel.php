<?
namespace Dmitriy\Shop\Models;
use Dmitriy\Shop\Models\ReaderModel;

class ShowsModel {
    
    function getItem($index = null){
        $reader = new ReaderModel();
        $shows_json = $reader->getDataFromFile('../private/files/item_base.txt');
        $shows_json .= ']';
        $item = json_decode($shows_json, true);// преаброзуем JSON с true не в объекты
        
        return !isset($index) ? $item : $item[$index];
    }
}
?>
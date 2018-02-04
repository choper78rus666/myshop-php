<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\ShowsModel;

class IndexController {
    
    function indexAction() {
        $title = 'Главная';
        $view_filename = 'index_view.php'; // вид
        $item = new ShowsModel();
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title,
            'item' => $item->getItem()
        ]);
    }
}

?>
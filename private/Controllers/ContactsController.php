<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Base\GenerateResponse;

class ContactsController {
    
    function indexAction() {
        $title = 'Контакты';
        $view_filename = 'contacts.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title
        ]);
    }
}
?>
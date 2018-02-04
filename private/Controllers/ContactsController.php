<?
namespace Dmitriy\Shop\Controllers;

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
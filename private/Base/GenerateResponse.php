<?
namespace Dmitriy\Shop\Base;

class GenerateResponse {
    
    static function generateResponse($view, $data=[]) {
        if(is_array($data)) {
            extract($data);
        }
        require_once "../private/Views/template_view.php";
    }
}
?>
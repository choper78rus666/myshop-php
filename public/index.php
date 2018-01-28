<?
include "../private/Controllers/controllers.php";
function runController() {
    $uri = parse_url($_SERVER['REQUEST_URI'],
        PHP_URL_PATH);
    $action = trim($uri, '/') ? : 'index';
    $action = $action . 'Action';
    
    if (!function_exists($action)) {
        $action = 'indexAction';
    }
    $action();
}
runController();
?>
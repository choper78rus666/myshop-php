<?
namespace Dmitriy\Shop\Base;
use Dmitriy\Shop\Controllers\IndexController;

class Router{
    
    static function run(){
        $controller = 'Index';
        $action = 'index';
        $get = "";
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        
        if(!empty($routes[1])){
            $controller = $routes[1]; // имя контроллера
        }
        
        if(!empty($routes[2])){
            $action = $routes[2]; // имя метода
        }
        
        if(!empty($routes[3])){
            $get = $routes[3]; // id итема
        }
        
        $controller = ucfirst(strtolower($controller)) . 'Controller';
        $controller = 'Dmitriy\Shop\Controllers\\' . $controller;
        $action = strtolower($action) . 'Action';
        
        if(class_exists($controller)){
            $controller = new $controller();
        } else {
            $controller = new IndexController();
            $controller->indexAction();
        }
        
        if(method_exists($controller, $action)){
            $controller->$action($get);
        } else {
            $controller = new IndexController();
            $controller->indexAction();
        }
    }
}

?>
<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\ReaderModel;
use Dmitriy\Shop\Models\CheckModel;
use Dmitriy\Shop\Models\RegModel;
use Dmitriy\Shop\Models\AuthModel;
use Dmitriy\Shop\Models\AuthVKModel;
use Dmitriy\Shop\Models\UserInfoModel;
use Dmitriy\Shop\Base\GenerateResponse;

class AccountController {
    private $check;
    private $reg;
    private $auth;
    private $authVK;
    private $info;
    
    public function __construct() {
        $this->check = new CheckModel();
        $this->reg = new RegModel();
        $this->auth = new AuthModel();
        $this->authVK = new AuthVKModel();
        $this->info = new UserInfoModel();
    }
    
    function registrationAction() {
        $title = 'Регистрация';
        $view_filename = 'registration.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title
        ]);
    }

    function reg_userAction(){
        if(isset($_POST['user_data'])){
            $post = $_POST;
            $user_data = $this->check->check_data($post['user_data']);
            
            echo $this->reg->reg_user($user_data);
        }
    }
    
    function loginAction($get) {
        session_start();
        if ($get === 'logout'){
            session_unset();
            header('Location: /account/login');
        }

        if ($_SESSION['auth'] === 'user') {
            header('Location:/account/user_account');
        } elseif ($_SESSION['auth'] === 'admin'){
            header('Location:/account/admin_account');
        }

        $title = 'Авторизация';
        $view_filename = 'login.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title
        ]);

    }

    function authAction(){
        if(isset($_POST['auth_data'])){
            $post = $_POST;
            $user_data = $this->check->check_data($post['auth_data']);
            
            echo $this->auth->authUser($user_data);
        }
    }
    
    function authVKAction(){
        if(isset($_POST['userVK'])){
            $post = $_POST;
            $user_data = $this->check->check_data($post['userVK']);
            echo $this->authVK->authUserVK($user_data);
        }
    }
    
    function uploadAction(){
        if(!empty($_FILES['file']['name'])){
            echo $this->info->uploadAvatar($_FILES);
        } else {
            echo "File not found";
        }
    }
    
    function user_infoAction(){
        session_start();
        if(isset($_POST['user_info'])){
            $post = $_POST;
            $user_data = $this->check->check_data($post['user_info']);
            $user_data += ['login'=>$_SESSION['login']];
            echo $this->info->updInfoUser($user_data);
        }
    }

    function infoAction() {
        session_start();
        if ($_SESSION['auth'] === 'user' || $_SESSION['auth'] === 'admin'){
            $user_info = $this->info->getInfoUser($_SESSION['login']);
            $title = 'Личный кабинет';
            $view_filename = 'info_account.php';
            GenerateResponse::generateResponse($view_filename, [
                'title' => $title,
                'user_info' => $user_info
            ]);
        } else {
            session_unset();
            header('Location: /account');
        }
        

    }
    
    function user_accountAction() {
        session_start();
        if ($_SESSION['auth'] !== 'user'){
            session_unset();
            header('Location: /account');
        }
        
        $title = 'Личный кабинет';
        $view_filename = 'user_account.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title
        ]);

    }

    function admin_accountAction() {
        session_start();
        if ($_SESSION['auth'] !== 'admin'){
            session_unset();
            header('Location: /account');
        }
        
        $title = 'Личный кабинет';
        $view_filename = 'admin_account.php';
        GenerateResponse::generateResponse($view_filename, [
            'title' => $title
        ]);
    }
}
?>
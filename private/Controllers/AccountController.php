<?
namespace Dmitriy\Shop\Controllers;
use Dmitriy\Shop\Models\ReaderModel;
use Dmitriy\Shop\Models\CheckModel;
use Dmitriy\Shop\Models\RegModel;
use Dmitriy\Shop\Models\AuthModel;

class AccountController {
    
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
            $check = new CheckModel();
            $user_data = $check->check_data($post['user_data']);
            $reg = new RegModel();
            echo $reg->reg_user($user_data);
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
            $check = new CheckModel();
            $user_data = $check->check_data($post['auth_data']);
            $auth = new AuthModel();
            echo $auth->authUser($user_data);
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
<?php
function indexAction() {
    include "../private/Models/shows_model.php";
    $title = 'Главная';
    $view_filename = 'index_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title,
        'item' => $item
    ]);
}

function catalogAction() {
    include "../private/Models/shows_model.php";
    $title = 'Каталог';
    $view_filename = 'catalog.php';
    generateResponse($view_filename, [
        'title' => $title,
        'item' => $item
    ]);
}

function itemAction() {
    include "../private/Models/shows_model.php";
    $get = $_GET;
    if (isset($get['id'])) {
        // получаем массив с show по id из GET запроса
        $index = $get['id']-1;
        $title = 'Карточка товара';
        $view_filename = 'items.php';
        generateResponse($view_filename, [
            'title' => $title,
            'item' => $item[$index]
        ]);
    }
}

function loginAction() {
    session_start();
    if ($_GET['logout']){
        session_unset();
    }

    if ($_SESSION['auth'] === 'user') {
        header('Location:/user_account');
    } elseif ($_SESSION['auth'] === 'admin'){
        header('Location:/admin_account');
    }
    
    $title = 'Авторизация';
    $view_filename = 'login.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
    
}

function authAction(){
    session_start();
    include "../private/Models/reader_model.php";
    include "../private/Models/check_model.php";

    function authUser() {
        $post = $_POST;
        $user_data = check_data($post['auth_data']);
        $all_users = getAllUsers();

        foreach($all_users as $value) {
           if ($value['login'] == $user_data['login']) {
                if (password_verify($user_data['pwd'], $value['pwd'])) {
                    $_SESSION['auth'] = $value['state'];
                    $_SESSION['login'] = $value['login'];
                    echo $value['state'];
                    return true;
                }
                echo 'pwd is wrong';
                return false;
            }
        }
        echo 'user not found';
        return false;
    }

    if(isset($_POST['auth_data'])){
        authUser();
    }
}

function user_accountAction() {
    $title = 'Личный кабинет';
    $view_filename = 'user_account.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
    
}

function admin_accountAction() {
    $title = 'Личный кабинет';
    $view_filename = 'admin_account.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
    
}

function registrationAction() {
    $title = 'Регистрация';
    $view_filename = 'registration.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
    
}

function reg_userAction(){
    include "../private/Models/reader_model.php";
    include "../private/Models/check_model.php";

    function reg_user(){
        $post = $_POST;
        $user_data = check_data($post['user_data']);
        $all_users = getAllUsers();

        if(!empty($all_users)){
            foreach($all_users as $value) {
                if ($value['login'] == $user_data['login']) {
                    echo 'user enabled';
                    return;
                }
            }

        } else {
            $all_users = [];
        }

        $user_data['pwd'] = password_hash($user_data['pwd'], PASSWORD_DEFAULT);
        array_push($all_users, $user_data);
        $user_data = $all_users;

        if(!$user_data or !addDataToFile($user_data, '../private/files/users_lst.txt')){
            echo 'not adds';
        } else {
            echo 'user add';
        }

    }

    reg_user();
}

function contactsAction() {
    $title = 'Контакты';
    $view_filename = 'contacts.php';
    generateResponse($view_filename, [
        'title' => $title
    ]);
    
}

function generateResponse($view, $data=[]) {
    if(is_array($data)) {
        extract($data);
    }
    require_once "../private/Views/template_view.php";
}
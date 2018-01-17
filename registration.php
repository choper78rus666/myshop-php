<?php
$post = $_POST;

function check_input($str){
    $str = strip_tags(trim($str));
    return empty($str)? false : $str;
}

function input_error(){
    echo "введены не все данные или данные не верны";
}

if(isset($post['last_name'])){
    $boo = true;
    $db['last_name'] = check_input($post['last_name']) ?: $boo = false;
    $db['login'] = check_input($post['login']) ?: $boo = false;
    $db['pwd'] = check_input($post['pwd']) ?: $boo = false;
    $db['email'] = check_input($post['email']) ?: $boo = false;
    if(!$boo){
        input_error();
    } else {
        echo "Регистрация прошла успешно!";
    }
}
    

?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>MyShop - Магазин свободной торговли</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport"
              content="width=device-width,
                       initial-scale=1.0
                       maximum-initial=2,
                       minimum-initial=1">
    </head>
    <body>
        <div class="flex_width">
<!-- Шапка -->
            <div class="flex_header">
                <div class="row_container center_flex">
                    <h1><em>MyShop</em></h1>
                </div>
                <div class="row_container center_flex">
                    <strong>Интерактивная торговая площадка</strong>
                </div>
                <br>
            </div>
            <br>
    <!-- Навигация -->
            <div class="flex_navic row_container direction_row">
                <div class="flex_nav_but"><a href="index.php" target="_self">Главная</a>
                </div>
                <div class="flex_nav_but"><a href="catalog.php">Каталог</a>
                </div>
                <div class="flex_nav_but"><a href="registration.php">Регистрация</a>
                </div>
                <div class="flex_nav_but"><a href="contacts.php">Контакты</a>
                </div>
                <div class="flex_nav_but"><a href="account.php">Личный кабинет</a>
                </div>
            </div>
            <br>
    <!-- Основной контент -->
            <div class="flex_content">
                <div class="row_container">
                    <div class="flex1">
                        <div class="content">
                            <form action="registration.php" method="post">
                                <fieldset>
                                    <legend>Регистрация пользователя</legend>
                                    <table class="lk_form">
                                        <tr>
                                            <td>
                                                <label for="name">Имя</label>
                                            </td>
                                            <td>
                                                <input id="name" type="text" name="last_name" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="login">Login</label>
                                            </td>
                                            <td>
                                                <input id="login" type="text" name="login" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pass">Password</label>
                                            </td>
                                            <td>
                                                <input id="pass" type="password" name="pwd" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="email">Email</label>
                                            </td>
                                            <td>
                                                <input id="email" type="email"  name="email" placeholder="name@mail.ru" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                            <br>
                                                <input type="submit" value="Отправить">
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <br><br>
    <!-- Футер -->
            <div class="row_container center_flex flex_footer">Домашнее задание 2017</div>
        </div>
    </body>
</html>
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
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>Личный кабинет</legend>
                                    <div id="lk_info">
                                        Для завершения регистрации заполните данную форму
                                    </div>
                                    <br>
                                    <table class=lk_form>
                                        <tr>
                                            <td>
                                                <label for="name">Имя</label>
                                            </td>
                                            <td>
                                                <input id="name" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="last_name">Фамилия</label>
                                            </td>
                                            <td>
                                                <input id="last_name" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="middle_name">Отчество</label>
                                            </td>
                                            <td>
                                                <input id="middle_name" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="birth_date">Дата рождения</label>
                                            </td>
                                            <td>
                                                <input id="birth_date" type="date" required placeholder="01.01.1999">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label id="sex">Укажите ваш пол</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="sex" checked>мужской</label>
                                                <label><input type="radio" name="sex">женский</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="info">Немного о себе</label>
                                            </td>
                                            <td>
                                                <textarea id="info" cols="30" rows="5" maxlength="150"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div>
                                        <label>Для установки аватара загрузите картинку<br><input type="file" accept="image/*" multiple></label>
                                    </div>
                                    <br>
                                    <input type="submit" value="Отправить данные">
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
<?php
$item = [
    'id' => '1',
    'title' => 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret',
    'image' => '../images/item1.jpg',
    'price' => '37590',
    'about' => 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret'
];
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
                            <table class="item navic">
                                <tr>
                                    <td>
                                        <p><strong><?php echo $item['title'] ?></strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Цена: <?php echo $item['price'] ?> руб.</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo $item['image'] ?>" height="120px" alt="нет изображения">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Характеристики:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <blockquote><?php echo $item['about'] ?></blockquote>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="button" name="<?php echo $item['id'] ?>" value="купить">
                                    </td>
                                </tr>
                            </table>
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
<?php
/*$item = [
    [
        'id' => 1,
        'title' => 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret',
        'image' => '../images/item1.jpg',
        'price' => 37590,
        'about' => 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret'
    ],
    [
        'id' => 2,
        'title' => 'Мультиварка-скороварка REDMOND RMC-PM380, 1000Вт, серебристый/черный',
        'image' => '../images/item2.jpg',
        'price' => 5500,
        'about' => 'мощность 1000Вт, объем 6л, дисплей, таймер, антипригарное покрытие, пароварка в комплекте, книга рецептов цвет- серебристый/черный'
    ],
    [
        'id' => 3,
        'title' => 'LED телевизор SAMSUNG UE32M5000AKXRU "R", 32", FULL HD (1080p), черный',
        'image' => '../images/item3.jpg',
        'price' => 19990,
        'about' => 'диагональ: 32"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный'
    ],
    [
        'id' => 4,
        'title' => 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]',
        'image' => '../images/item4.jpg',
        'price' => 13100,
        'about' => 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа'
    ],
    [
        'id' => 5,
        'title' => 'Видеокарта MSI GeForce GTX 1070Ti, GTX 1070 Ti GAMING 8G, 8Гб, GDDR5, Ret',
        'image' => '../images/item1.jpg',
        'price' => 37590,
        'about' => 'nVidia GeForce GTX 1070Ti; частота процессора: 1607 МГц (1683 МГц, в режиме Boost); частота памяти: 8008МГц; объём видеопамяти: 8Гб; тип видеопамяти: GDDR5; поддержка: SLI; DirectX 12/OpenGL 4.5; доп. питание: 6+8 pin; блок питания не менее: 500Вт; тип поставки: Ret'
    ],
    [
        'id' => 6,
        'title' => 'Мультиварка-скороварка REDMOND RMC-PM380, 1000Вт, серебристый/черный',
        'image' => '../images/item2.jpg',
        'price' => 5500,
        'about' => 'мощность 1000Вт, объем 6л, дисплей, таймер, антипригарное покрытие, пароварка в комплекте, книга рецептов цвет- серебристый/черный'
    ],
    [
        'id' => 7,
        'title' => 'LED телевизор SAMSUNG UE32M5000AKXRU "R", 32", FULL HD (1080p), черный',
        'image' => '../images/item3.jpg',
        'price' => 19990,
        'about' => 'диагональ: 32"; разрешение: 1920 x 1080; HDTV FULL HD (1080p); DVB-T2; DVB-С; DVB-S2; тип USB: мультимедийный; цвет: черный'
    ],
    [
        'id' => 8,
        'title' => 'Кресло игровое AEROCOOL AC80C-BR, на колесиках, кожа, черный/красный [428388]',
        'image' => '../images/item4.jpg',
        'price' => 13100,
        'about' => 'тип установки: на колесиках; подлокотники; эргономичная спинка (сетка); газлифт; ограничение по весу: 150кг; материал обивки: кожа'
    ]
    
];*/

// Записал данные с массива в файл
 //file_put_contents('files/item_base.txt', rtrim(json_encode($item),']'), FILE_APPEND);
?>

<? 
include 'header.php'; 
include "models/shows_model.php";
?>
    <!-- Основной контент -->
            <div class="flex_content">
                <div class="row_container">
                    <div class="flex1">
                        <div class="content">
                            <table class="item navic">
                                <tr>
                                    <td>
                                        <p><strong><?php echo $item[0]['title'] ?></strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Цена: <?php echo $item[0]['price'] ?> руб.</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo $item[0]['image'] ?>" height="120px" alt="нет изображения">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Характеристики:</th>
                                </tr>
                                <tr>
                                    <td>
                                        <blockquote><?php echo $item[0]['about'] ?></blockquote>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="button" name="<?php echo $item[0]['id'] ?>" value="купить">
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
<? include 'footer.php'; ?>
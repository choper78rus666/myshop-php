<!-- Основной контент -->
            <div class="flex_content">
                <div class="row_container">
                <!-- навигация по каталогу -->
                    <div class="flex1 sizer_item left_nav">
                        <div class="flex_content_navi">
                            <h4>Разделы каталога</h4>
                            <ul type="square">
                                <li><a href="">Бытовая техника</a></li>
                                <li><a href="">Аудио Видео</a></li>
                                <li><a href="">Автозапчасти</a></li>
                                <li><a href="">Мебель</a></li>
                                <li><a href="">Сантехника</a></li>
                                <li><a href="">Спорт Туризм</a></li>
                            </ul>
                        </div>
                    </div>
                <!-- Товары -->
                    <div class="flex2 row_container">
                        <div class="direction_col flex1">
                            <? for($i = 0; $i < count($item); $i=$i+2): ?>
                            <div class="items sizer_item">
                                <div>
                                    <small><? echo $item[$i]['title']; ?></small>
                                </div>
                                <br>
                                <a href="<? echo 'item?id='.$item[$i]['id']; ?>">
                                    <img src="<? echo $item[$i]['image']; ?>" height="70px" alt="нет изображения">
                                </a>
                                <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                            </div>
                            <? endfor; ?>
                        </div>
                        <div class="direction_col flex1">
                            <? for($i = 1; $i < count($item); $i=$i+2): ?>
                            <div class="items sizer_item">
                                <div>
                                    <small><? echo $item[$i]['title']; ?></small>
                                </div>
                                <br>
                                <a href="<? echo 'item?id='.$item[$i]['id']; ?>">
                                    <img src="<? echo $item[$i]['image']; ?>" height="70px" alt="нет изображения">
                                </a>
                                <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                            </div>
                            <? endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
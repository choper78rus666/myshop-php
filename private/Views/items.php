<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <div class="item navic">
                    <div class="direction_col">
                        <p><strong><?php echo $item['title'] ?></strong></p>
                        <p><strong>Цена: <?php echo $item['price'] ?> руб.</strong></p>
                        <img src="<?php echo $item['image'] ?>" height="120px" alt="нет изображения">
                        <div class="text-center">
                            <p><strong>Характеристики:</strong></p>
                        </div>
                        <blockquote>
                            <?php echo $item['about'] ?>
                        </blockquote>
                        <button id="add_cart" value="<? echo $item['id']; ?>">Купить</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

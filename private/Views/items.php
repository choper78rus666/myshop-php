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
                        <? if($item['count']-$item['cart_count'] > 0): ?>
                            <div id="<? echo $item['id']; ?>" class="add_cart"><button value="<? echo $item['id']; ?>">В корзину</button></div> 
                        <? else: ?>
                            <div class="text-center"><strong>Нет в наличии</strong></div>
                        <? endif; ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

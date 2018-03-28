<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Корзина</legend>
                        <? if(!$item_cart): ?>
                        <div>Ваша корзина пуста</div>
                        <? else: ?>
                        <div class="catalog">
                            <div class="row_container">
                                <div class="flex4">Описание товара</div>
                                <div class="flex1 cart-count">Количество</div>
                                <div class="flex2 cart-price">Стоимость</div>
                            </div>
                            <? for($i = 0; $i < count($item_cart); $i++): $order_sum += $item_cart[$i]['price']?>
                            <div class="row_container" id="back<? echo $i%2;?>">
                                <div class="flex4 row_container">
                                    <div class="flex3">
                                        <a href="<? echo '/catalog/item/'.$item_cart[$i]['id']; ?>">
                                            <? echo $item_cart[$i]['title']; ?>
                                        </a>
                                    </div>
                                    <div class="flex1">
                                        <img src="<? echo $item_cart[$i]['image']; ?>" height="40px" alt="нет изображения">
                                    </div>
                                </div>
                                <div class="flex1 text-center">
                                    <p><strong><? echo $item_cart[$i]['count']; ?></strong></p>
                                </div>
                                <div class="flex1 text-center">
                                    <p><strong><? echo $item_cart[$i]['price']; ?> руб.</strong></p>
                                </div>
                                <div class="flex1 align_center_flex">  
                                    <a href="<? echo '/cart/delete/'.$item_cart[$i]['id']; ?>">Удалить</a>
                                </div>
                            </div>
                            <? endfor; ?>
                        </div>
                        <p>В корзине товаров <? echo count($item_cart); ?> на сумму: <? echo $order_sum; ?> руб.</p>
                        <br><br>
                        <div style="float: right">
                            <a href="/">Оформить заказ</a>
                        </div>
                        <? endif ?>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
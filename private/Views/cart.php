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
                        <table class="catalog">
                            <tr>
                                <th>Описание товара</th>
                                <th></th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                            </tr>
                            <? for($i = 0; $i < count($item_cart); $i++): $order_sum += $item_cart[$i]['price']?>
                            <tr id="back<? echo $i%2;?>">
                                <td>
                                    <a href="<? echo '/catalog/item/'.$item_cart[$i]['id']; ?>">
                                        <? echo $item_cart[$i]['title']; ?>
                                    </a>
                                </td>
                                <td>
                                    <img src="<? echo $item_cart[$i]['image']; ?>" height="40px" alt="нет изображения">
                                </td>
                                <td>
                                    <p><strong><? echo $item_cart[$i]['count']; ?></strong></p>
                                </td>
                                <td>
                                    <p><strong><? echo $item_cart[$i]['price']; ?> руб.</strong></p>
                                </td>
                                <td>  
                                    <a href="<? echo '/cart/delete/'.$item_cart[$i]['id']; ?>">Удалить</a>
                                </td>
                            </tr>
                            <? endfor; ?>
                        </table>
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
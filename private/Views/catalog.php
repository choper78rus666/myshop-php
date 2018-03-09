<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Каталог товаров</legend>
                        <table class="catalog">
                            <tr>
                                <th>Описание товара</th>
                                <th colspan="3">Стоимость</th>
                            </tr>
                            <? for($i = 0; $i < count($item); $i++): ?>
                            <tr id="back<? echo $i%2;?>">
                                <td>
                                    <a href="<? echo 'catalog/item/'.$item[$i]['id']; ?>">
                                        <? echo $item[$i]['title']; ?>
                                    </a>
                                </td>
                                <td>
                                    <img src="<? echo $item[$i]['image']; ?>" height="40px" alt="нет изображения">
                                </td>
                                <td>  
                                    <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                                </td>
                                <td>
                                    <button id="add_cart" value="<? echo $item[$i]['id']; ?>">Купить</button>
                                </td>
                            </tr>
                            <? endfor; ?>
                        </table>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
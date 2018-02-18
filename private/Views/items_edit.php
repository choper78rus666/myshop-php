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
                            <tr>
                                <td>
                                    <a href="<? echo '/catalog/item_edit/'.$item[$i]['id']; ?>">
                                        <? echo $item[$i]['title']; ?>
                                    </a>
                                </td>
                                <td>
                                    <img src="<? echo $item[$i]['image']; ?>" height="40px" alt="нет изображения">
                                </td>
                                <td>  
                                    <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                                </td>
                            </tr>
                            <? endfor; ?>
                        </table>
                        <br><br>
                        <div style="float: right">
                            <input id="add" type="submit" value="Добавить">
                        </div>
                        
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
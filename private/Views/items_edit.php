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
                                <th></th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                            </tr>
                            <? for($i = 0; $i < count($item); $i++): ?>
                            <tr id="back<? echo $i%2;?>">
                                <td>
                                    <a href="<? echo '/catalog/item_edit/'.$item[$i]['id']; ?>">
                                        <? echo $item[$i]['title']; ?>
                                    </a>
                                </td>
                                <td>
                                    <img src="<? echo $item[$i]['image']; ?>" height="40px" alt="нет изображения">
                                </td>
                                <td>
                                    <p><strong><? echo $item[$i]['count']; ?></strong></p>
                                </td>
                                <td>  
                                    <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                                </td>
                                <td>  
                                    <a href="<? echo '/catalog/delete/'.$item[$i]['id']; ?>">Удалить</a>
                                </td>
                            </tr>
                            <? endfor; ?>
                        </table>
                        <br>
                        
                        <div style="float: right">
                            <a href="/catalog/item_edit/0">Добавить</a>
                        </div>
                        
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
    <div class="listing">
        <form action="/catalog/edit" method="POST">
            <button type="submit" name="list" value="<? echo $list-1;?>">◄</button>
               <strong><? echo $list;?></strong>
            <button type="submit" name="list" value="<? echo $list*10 < $item[0]['maxcount'] ? $list+1 : $list;?>">►</button>
        </form>
    </div>
</div>
<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Каталог товаров</legend>
                        <div class="catalog">
                            <div class="row_container">
                                <div class="flex4">Описание товара</div>
                                <div class="flex2 title-price">Стоимость</div>
                            </div>
                            <? for($i = 0; $i < count($item); $i++): ?>
                            <div class="row_container" id="back<? echo $i%2;?>">
                                <div class="flex3">
                                    <a href="<? echo 'catalog/item/'.$item[$i]['id']; ?>">
                                        <? echo $item[$i]['title']; ?>
                                    </a>
                                </div>
                                <div class="flex1">
                                    <img src="<? echo $item[$i]['image']; ?>" height="40px" alt="нет изображения">
                                </div>
                                <div class="flex1">  
                                    <p><strong><? echo $item[$i]['price']; ?> руб.</strong></p>
                                </div>
                                <div class="flex1 align_center_flex">
                                    <? if($item[$i]['count']-$item[$i]['cart_count'] > 0): ?>
                                <div id="<? echo $item[$i]['id']; ?>" class="add_cart"><button value="<? echo $item[$i]['id']; ?>">В корзину</button></div> 
                                <? else: ?>
                                <div class="text-center"><strong>Нет в наличии</strong></div>
                                <? endif; ?>
                                </div>
                            </div>
                            <? endfor; ?>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
    <div class="listing">
        <form action="/catalog" method="POST">
            <button type="submit" name="list" value="<? echo $list-1;?>">◄</button>
               <strong><? echo $list;?></strong>
            <button type="submit" name="list" value="<? echo $list*10 < $item[0]['maxcount'] ? $list+1 : $list;?>">►</button>
        </form>
    </div>
</div>
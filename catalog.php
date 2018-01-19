<?
include 'header.php';
include "models/shows_model.php";
?>
    <!-- Основной контент -->
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
                                                <a href="items.php">
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
                                                <input type="checkbox" name="<? echo $item[$i]['id']; ?>">
                                            </td>
                                        </tr>
                                        <? endfor; ?>
                                    </table>
                                    <input id="reset" type="reset" value="Отменить выбор">
                                    <br><br>
                                    <input id="buy" type="submit" value="Купить">
                                </fieldset>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br><br>
            <br><br>
    <!-- Футер -->
<? include 'footer.php'; ?>
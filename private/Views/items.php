<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <table class="item navic">
                    <tr>
                        <td>
                            <p><strong><?php echo $item['title'] ?></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Цена: <?php echo $item['price'] ?> руб.</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo $item['image'] ?>" height="120px" alt="нет изображения">
                        </td>
                    </tr>
                    <tr>
                        <th>Характеристики:</th>
                    </tr>
                    <tr>
                        <td>
                            <blockquote><?php echo $item['about'] ?></blockquote>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" name="<?php echo $item[$index]['id'] ?>" value="купить">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
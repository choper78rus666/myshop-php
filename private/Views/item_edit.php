<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id="item_edit" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Редактирование товаров</legend>
                        <table class=lk_form>
                            <tr>
                                <td>
                                    <label>ID товара:</label>
                                </td>
                                <td>
                                    <input id="id_item" type="text" value="<? echo $item['id']; ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="category">Категория</label>
                                </td>
                                <td>
                                    <select id="category" value="<? echo $item['category']; ?>" required>
                                        <option <? echo $item['category'] !== 'other' ?:'selected'; ?> value="other">Разное</option>
                                        <option <? echo $item['category'] !== 'PC' ?:'selected'; ?> value="PC">Компьютеры</option>
                                        <option <? echo $item['category'] !== 'Appliances' ?:'selected'; ?> value="Appliances">Бытовая техника</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="title">Наименование товара:</label>
                                </td>
                                <td>
                                    <textarea id="title" cols="30" rows="5" maxlength="200" required><? echo $item['title']; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="count">Количество:</label>
                                </td>
                                <td>
                                    <input id="count" type="number" rub value="<? echo $item['count']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="about">Характеристики:</label>
                                </td>
                                <td>
                                    <textarea id="about" cols="30" rows="5" maxlength="500" required><? echo $item['about']; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="price">Цена:</label>
                                </td>
                                <td>
                                    <input id="price" type="number" rub value="<? echo $item['price']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><img id="image" src="<? echo $item['image']; ?>" height="150px"></div>
                                    </td><td>
                                    <label>Картинка товара<br></label>
                                    <input id="item" type="file" name="item" accept="image/*"  value="<? echo $item['image']; ?>">
                                    <div id="response_image"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input form="item_edit" type="submit" value="Сохранить данные">
                                    <div id="response"></div>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/item_edit.js"></script>
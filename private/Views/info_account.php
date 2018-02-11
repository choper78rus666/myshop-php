<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id="user_info" method="post">
                    <fieldset>
                        <legend>Личный кабинет</legend>
                        <div id="lk_info">
                            Информация о пользователе
                        </div>
                        <br>
                        <table class=lk_form>
                            <tr>
                                <td>
                                    <label for="name">Имя</label>
                                </td>
                                <td>
                                    <input id="name" type="text" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="surname">Фамилия</label>
                                </td>
                                <td>
                                    <input id="surname" type="text" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="middle_name">Отчество</label>
                                </td>
                                <td>
                                    <input id="middle_name" type="text" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="birthday">Дата рождения</label>
                                </td>
                                <td>
                                    <input id="birthday" type="date" required placeholder="01.01.1999">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="sex">Укажите ваш пол</label>
                                </td>
                                <td>
                                    <label><input id="sexm" type="radio" name="sex" checked>мужской</label>
                                    <label><input id="sexf" type="radio" name="sex">женский</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="about">Немного о себе</label>
                                </td>
                                <td>
                                    <textarea id="about" cols="30" rows="5" maxlength="150"></textarea>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div>
                            <label>Для установки аватара загрузите картинку<br><input id="avatar" type="file" name="avatar" accept="image/*" multiple></label>
                        </div>
                        <br>
                        <input form="user_info" type="submit" value="Отправить данные">
                        <a style="float: right;" href="/account/login/logout">Выйти с ЛК</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
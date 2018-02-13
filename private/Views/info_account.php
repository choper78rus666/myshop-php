<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id="user_info" method="post" enctype="multipart/form-data">
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
                                    <input id="name" type="text" value="<? echo $user_info['name']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="surname">Фамилия</label>
                                </td>
                                <td>
                                    <input id="surname" type="text" value="<? echo $user_info['surname']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="middle_name">Отчество</label>
                                </td>
                                <td>
                                    <input id="middle_name" type="text" value="<? echo $user_info['middle_name']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="birthday">Дата рождения</label>
                                </td>
                                <td>
                                    <input id="birthday" type="date" value="<? echo $user_info['birthday']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="sex">Укажите ваш пол</label>
                                </td>
                                <td>
                                    <label><input id="sexm" type="radio" name="sex" <? echo $user_info['sex'] !== male ?:'checked'; ?>>мужской</label>
                                    <label><input id="sexf" type="radio" name="sex" <? echo $user_info['sex'] !== female ?:'checked'; ?>>женский</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="about">Немного о себе</label>
                                </td>
                                <td>
                                    <textarea id="about" cols="30" rows="5" maxlength="150" required><? echo $user_info['about']; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><img id="image" src="../static/upload/<? echo $user_info['avatar']; ?>" height="150px"></div>
                                    </td><td>
                                    <label>Загрузите аватар<br></label>
                                    <input id="avatar" type="file" name="avatar" accept="image/*"  value="<? echo $user_info['avatar']; ?>">
                                    <div id="response_image"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input form="user_info" type="submit" value="Сохранить данные">
                                    <div id="response"></div>
                                    <a style="float: right;" href="/account/login/logout">Выйти с ЛК</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
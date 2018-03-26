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
                        <div class="direction_col lk_form">
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label for="name">Имя</label>
                                </div>
                                <div class="flex1 fix_col">
                                    <input id="name" type="text" value="<? echo $user_info['name']; ?>" required>
                                </div>
                            </div>
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label for="surname">Фамилия</label>
                                </div>
                                <div class="flex1 fix_col">
                                    <input id="surname" type="text" value="<? echo $user_info['surname']; ?>" required>
                                </div>
                            </div>
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label for="middle_name">Отчество</label>
                                </div>
                                <div class="flex1 fix_col">
                                    <input id="middle_name" type="text" value="<? echo $user_info['middle_name']; ?>" required>
                                </div>
                            </div>
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label for="birthday">Дата рождения</label>
                                </div>
                                <div class="flex1 fix_col">
                                    <input id="birthday" type="date" value="<? echo $user_info['birthday']; ?>" required>
                                </div>
                            </div>
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label id="sex">Укажите ваш пол</label>
                                </div>
                                <div class="flex1">
                                    <label><input id="sexm" type="radio" name="sex" <? echo $user_info['sex'] !== male ?:'checked'; ?>>мужской</label>
                                    <label><input id="sexf" type="radio" name="sex" <? echo $user_info['sex'] !== female ?:'checked'; ?>>женский</label>
                                </div>
                            </div>
                            <div class="row_container">
                                <div class="flex1 fix_col">
                                    <label for="about">Немного о себе</label>
                                </div>
                                <div class="flex1">
                                    <textarea id="about" cols="30" rows="5" maxlength="150" required><? echo $user_info['about']; ?></textarea>
                                </div>
                            </div>
                            <div class="row_container center">
                                <div>
                                    <div><img id="image" src="../static/upload/<? echo $user_info['avatar']; ?>" height="150px"></div>
                                    <br>
                                    <label>Загрузите аватар<br></label>
                                    <input id="avatar" type="file" name="avatar" accept="image/*"  value="<? echo $user_info['avatar']; ?>">
                                    <div id="response_image"></div>
                                </div>
                            </div>
                                <br>
                            <div class="row_container center">
                                <div>
                                    <input form="user_info" type="submit" value="Сохранить данные">
                                    <div id="response"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
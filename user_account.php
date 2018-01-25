<?
include 'header.php'; 
?>
    <!-- Основной контент -->
            <div class="flex_content">
                <div class="row_container">
                    <div class="flex1">
                        <div class="content">
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>Личный кабинет</legend>
                                    <div id="lk_info">
                                        Для завершения регистрации заполните данную форму
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
                                                <label for="last_name">Фамилия</label>
                                            </td>
                                            <td>
                                                <input id="last_name" type="text" required>
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
                                                <label for="birth_date">Дата рождения</label>
                                            </td>
                                            <td>
                                                <input id="birth_date" type="date" required placeholder="01.01.1999">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label id="sex">Укажите ваш пол</label>
                                            </td>
                                            <td>
                                                <label><input type="radio" name="sex" checked>мужской</label>
                                                <label><input type="radio" name="sex">женский</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="info">Немного о себе</label>
                                            </td>
                                            <td>
                                                <textarea id="info" cols="30" rows="5" maxlength="150"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div>
                                        <label>Для установки аватара загрузите картинку<br><input type="file" accept="image/*" multiple></label>
                                    </div>
                                    <br>
                                    <input type="submit" value="Отправить данные">
                                    <a style="float: right;" href="login.php?logout=true">Выйти с ЛК</a>
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
<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id="reg_form" method="post">
                    <fieldset>
                        <legend>Регистрация пользователя</legend>
                        <div class="lk_form center">
                            <div class="row_container">
                                <div class="flex1">
                                    <div class="direction_col">
                                        <label for="login">Login</label>
                                        <label for="pass">Password</label>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="flex1">
                                    <div class="direction_col">
                                        <input id="login" type="text" required>
                                        <input id="pass" type="password" required>
                                        <input id="email" type="email" placeholder="name@mail.ru" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row_container center_flex">
                                <div align="center">
                                    <div id="response">Введите данные для регистрации</div>
                                    <br>
                                    <input form="reg_form" type="submit" value="Отправить">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

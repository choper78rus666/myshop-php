<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id="auth_form" method="post">
                    <fieldset>
                        <legend>Авторизация пользователя</legend>
                        <div class="lk_form center">
                            <div class="row_container">
                                <div class="flex1">
                                    <div class="direction_col">
                                        <label for="login">Login</label>
                                        <label for="pass">Password</label>
                                    </div>
                                </div>
                                <div class="flex1">
                                    <div class="direction_col">
                                        <input id="login" type="text" required>
                                        <input id="pass" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row_container center_flex">
                                <div align="center">
                                    <div id="response">Введите данные для входа</div>
                                    <br>
                                    <input form="auth_form" type="submit" value="Отправить">
                                </div>
                            </div>
                            <div class="row_container center_flex">
                                <div align="center">
                                    <p>Вход через Вконтакте</p>
                                    <button type="button" id="vk_reg">Войти через VK</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/authVK.js"></script>

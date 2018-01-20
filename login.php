<? include 'header.php'; ?>
    <!-- Основной контент -->
            <div class="flex_content">
                <div class="row_container">
                    <div class="flex1">
                        <div class="content">
                            <form id ="auth_form" method="post">
                                <fieldset>
                                    <legend>Авторизация пользователя</legend>
                                    <table class="lk_form">
                                        <tr>
                                            <td>
                                                <label for="login">Login</label>
                                            </td>
                                            <td>
                                                <input id="login" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pass">Password</label>
                                            </td>
                                            <td>
                                                <input id="pass" type="password" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <div id="response">Введите данные для входа</div>
                                            <br>
                                                <input form="auth_form" type="submit" value="Отправить">
                                            </td>
                                        </tr>
                                    </table>
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
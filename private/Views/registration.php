<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="content">
                <form id ="reg_form" method="post">
                    <fieldset>
                        <legend>Регистрация пользователя</legend>
                        <table class="lk_form">
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
                                <td>
                                    <label for="email">Email</label>
                                </td>
                                <td>
                                    <input id="email" type="email" placeholder="name@mail.ru" required>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <div id="response">Введите данные для регистрации</div>
                                <br>
                                    <input form="reg_form" type="submit" value="Отправить">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
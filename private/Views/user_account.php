<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="direction_col flex_content_navi">
            <h4>Привет Юзер</h4>
                <ul>
                    <li>
                        <? echo empty($bind) ? 
                        '<a href="/account/info">Личная информация</a>' :
                        '<a href="/account/login/bind" title="Если у вас есть аккаунт на этом сайте, вы можете привязать его, пройдя авторизацию по этой ссылке">Связать аккаунт</a>';
                        ?>
                    </li>
                        <br>
                    <li>   
                        <a href="/account/login/logout">Выйти с ЛК</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex2">
            <? empty($content) ? :include $content;?>
        </div>
    </div>
</div>
<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="direction_col content">
                <? echo empty($bind) ? 
                '<a href="/account/info">Личная информация</a>' :
                '<a href="/account/login/bind" title="Если у вас есть аккаунт на этом сайте, вы можете привязать его, пройдя авторизацию по этой ссылке">Связать аккаунт</a>';
                ?>
                <br>
                <a href="/account/login/logout">Выйти с ЛК</a>
            </div>
        </div>
    </div>
</div>
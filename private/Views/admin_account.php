<div class="flex_content">
    <div class="row_container">
        <div class="flex1">
            <div class="direction_col flex_content_navi">
                <h4>Привет Админ =)</h4>
                <ul>
                    <li>
                        <a href="/account/info">Личная информация</a>
                    </li>
                    <li>
                        <a href="/catalog/edit">Редактирование каталога</a>
                    </li>
                        <br>
                    <li>
                        <a href="/account/login/logout">Выйти с ЛК</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex2">
            <? empty($content) ? : include $content;?>
        </div>
    </div>
</div>
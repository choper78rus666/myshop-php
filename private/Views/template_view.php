<!DOCTYPE>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>MyShop - <? echo $title; ?></title>
        <link rel="stylesheet" href="/static/css/style.css">
        <script src="/static/js/jquery-3.2.1.js"></script>
        <script src="https://vk.com/js/api/openapi.js?152" type="text/javascript"></script>
        <meta name="viewport"
              content="width=device-width,
                       initial-scale=1.0
                       maximum-initial=2,
                       minimum-initial=1">
    </head>
    <body>
        <div class="flex_width">
            <? include 'header.php'; ?>
    <!-- Основной контент -->
            
            <? require_once $view; ?>
            
            <br><br>
            <br><br>
    <!-- Футер -->
            <? include 'footer.php'; ?>
        </div>
    <script src="/static/js/check_input.js"></script>
    <script src="/static/js/auth.js"></script>
    <script src="/static/js/index.js"></script>
    <script src="/static/js/user_info.js"></script>
    </body>
</html>
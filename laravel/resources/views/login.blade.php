<html lang="ru">
<head>
    <base href="/"/>
    <meta charset="UTF-8">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="SHORTCUT ICON" href="favicon.ico">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/styles.min.css"/>
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="assets/css/ie8.min.css"/>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>Админка</h1>
<div class="container">

    <? foreach ($errors->all() as $error) { ?>
        <div class="form-error"><?= $error ?></div>
    <? } ?>

    <form action="login" method="post">
        <input type="text" placeholder="Имя" name="name"/>
        <input type="password" placeholder="Пароль" name="password"/>
        <input type="submit" value="Авторизоваться"/>
    </form>
</div>

</body>
</html>
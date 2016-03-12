<!DOCTYPE html>
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
    <link rel="stylesheet" href="/laravel/resources/assets/build/css/admin.min.css"/>
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="b-admin__logo text-left">MyCMS</div>
                    <div class="b-admin__logout-wrapper text-right">
                        <span class="b-admin__header-username"><?= Auth::user()->name ?></span>
                        <a href="/logout/" class="b-admin__logout">Выйти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Управление проектом</h1>
            </div>
        </div>
        <!-- ========================= Динамический контент ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Динамический контент</h2>
                <div class="b-admin__current">
                    <form id="seo_upload" action="" method="POST" enctype="multipart/form-data">
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-12">
                                <span class="btn btn-success fileinput-button">
                                    <span>Добавить файл...</span>
                                    <input type="file" name="files[]" accept="application/vnd.ms-excel" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    Начать загрузку
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    Отменить загрузку
                                </button>
                                <button type="button" class="btn btn-danger delete">
                                    Удалить
                                </button>
                                <input type="checkbox" class="toggle">
                                <span class="fileupload-process"></span>
                            </div>
                            <div class="col-lg-12 fileupload-progress fade">
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>
                </div>
            </div>
        </div>
        <!-- ========================= /Динамический контент ============================ -->

        <!-- ========================= Преимущества ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Преимущества</h2>

                <? if (count($advant)) { ?>
                <form action="/admin/advant-update/<?= $advant[0]->id ?>" class="b-admin__form" method="post">
                    <div class="form-group b-admin__tynymce">
                        <textarea name="advant" id="advant" placeholder="Преимущество"><?= $advant[0]->text ?></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn">Редактировать</button>
                    </div>
                </form>
                <? } ?>
            </div>
        </div>
        <!-- ========================= /Преимущества ============================ -->

        <!-- ========================= Отзывы ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Отзывы</h2>
                <div class="b-admin__current">
                    <h3>Список отзывов</h3>

                    <? if (count($arReview)) { ?>
                    <div class="b-admin__list">
                        <? foreach ($arReview as $review) { ?>
                        <div class="b-admin__list-item">
                            <form action="/admin/review-update/<?= $review->id ?>" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="Имя" name="name" value="<?= $review->name ?>"/>
                                    <input type="text" placeholder="Компания" name="company" value="<?= $review->company ?>"/>
                                    <input type="text" placeholder="Описание" name="description" value="<?= $review->description ?>"/>
                                    <input type="text" placeholder="Ссылка" name="link" value="<?= $review->link ?>"/>
                                    <input type="text" placeholder="Номер" name="sort" value="<?= $review->sort ?>"/>
                                    <button class="btn" type="submit">Обновить</button>
                                    <a href="/admin/review-delete/<?= $review->id ?>" class="btn">Удалить</a>
                                </div>
                            </form>
                        </div>
                        <? }?>
                    </div>
                    <? } ?>
                </div>
                <? foreach ($errors->all() as $error) { ?>
                <div class="form-error"><?= $error ?></div>
                <? } ?>
                <form action="/admin/review/" method="post" class="b-admin__form">
                    <h3>Добавить отзыв</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Имя" name="name"/>
                        <input type="text" placeholder="Компания" name="company"/>
                        <input type="text" placeholder="Описание" name="description"/>
                        <input type="text" placeholder="Ссылка" name="link"/>
                        <input type="text" placeholder="Номер" name="sort"/>
                    </div>
                    <div class="form-group">
                        <button class="btn" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ========================= /Отзывы ============================ -->

        <!-- ========================= Сертификаты ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Сертификаты</h2>
                <div class="b-admin__current">
                    <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-12">
                                <span class="btn btn-success fileinput-button">
                                    <span>Добавить файл...</span>
                                    <input type="file" name="files[]" accept="image/jpg,image/png,image/jpeg,image/gif" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    Начать загрузку
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    Отменить загрузку
                                </button>
                                <button type="button" class="btn btn-danger delete">
                                    Удалить
                                </button>
                                <input type="checkbox" class="toggle">
                                <span class="fileupload-process"></span>
                            </div>
                            <div class="col-lg-12 fileupload-progress fade">
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>
                </div>
            </div>
        </div>
        <!-- ========================= /Сертификаты ============================ -->

        <!-- ========================= Управление пользователями ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Управление пользователями</h2>
                <div class="b-admin__current">
                    <h3>Список пользователей</h3>

                    <? if (count($arUsers)) { ?>
                    <div class="b-admin__list">
                        <? foreach ($arUsers as $user) { ?>
                            <div class="b-admin__list-item">
                                <form action="/admin/user-update/<?= $user->id ?>" method="post">
                                    <div class="form-group">
                                        <input type="email" placeholder="email" name="email" value="<?= $user->email ?>"/>
                                        <input type="password" placeholder="Пароль" name="password"/>
                                        <button class="btn" type="submit">Обновить</button>
                                        <a href="/admin/user-delete/<?= $user->id ?>" class="btn">Удалить</a>
                                    </div>
                                </form>
                            </div>
                       <? }?>
                    </div>
                    <? } ?>
                </div>

                <? foreach ($errors->all() as $error) { ?>
                <div class="form-error"><?= $error ?></div>
                <? } ?>
                <form action="/admin/user/" method="post" class="b-admin__form">
                    <h3>Добавить пользователя</h3>
                    <div class="form-group">
                        <input type="email" placeholder="email" name="email"/>
                        <input type="password" placeholder="Пароль" name="password"/>
                    </div>
                    <div class="form-group">
                        <button class="btn" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ========================= /Управление пользователями ============================ -->

    </div>
    <!-- ============================ SCRIPTS ==================================== -->
    <script src="/laravel/resources/assets/build/js/vendor-admin.min.js"></script>
    <script src="/laravel/resources/assets/build/js/admin.min.js"></script>
    <!-- ============================ /SCRIPTS ==================================== -->

    <!-- ============================ Шаблоны ===================================== -->
    <script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td class="b-admin__tpl-td">
                <span class="b-admin__tpl-preview"></span>
            </td>
            <td class="b-admin__tpl-td">
                {%=file.name%}
                <strong class="error text-danger"></strong>
            </td>
            <td class="b-admin__tpl-td">
                <p class="size">Загрузка...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            </td>
            <td class="b-admin__tpl-td">
                {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn btn-primary start" disabled>
                        Загрузить
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class="btn btn-warning cancel">
                        Отменить
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td class="b-admin__tpl-td">
                <span class="b-admin__tpl-preview">
                    {% if (file.thumbnailUrl) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                    {% } %}
                </span>
            </td>
            <td class="b-admin__tpl-td">

                    {% if (file.url) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    {% } else { %}
                        <span>{%=file.name%}</span>
                    {% } %}

                {% if (file.error) { %}
                    <div><span class="label label-danger">Ошибка</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td class="b-admin__tpl-td">
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td class="b-admin__tpl-td">
                {% if (file.deleteUrl) { %}
                    <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                        Удалить
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                {% } else { %}
                    <button class="btn btn-warning cancel">
                        Отменить
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
    <!-- ============================ /Шаблоны ====================================== -->

</body>
</html>
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
    <link rel="stylesheet" href="/laravel/resources/assets/build/css/style.min.css"/>
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <a href="/logout/">Выйти</a>
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
                    <h3>Список перимуществ</h3>
                    <div class="b-admin__list">
                        <div class="b-admin__list-item">
                            <a href="#" class="b-admin__link">Выгрузить динамический контент</a>
                        </div>
                    </div>
                </div>
                <form action="#" class="b-admin__form">
                    <h3>Загрузка динамического контента</h3>
                    <div class="form-group">
                        <input type="file" placeholder="Загрузите excel c данными кампании"/>
                    </div>
                    <div class="form-group">
                        <button class="btn--goal" type="submit">Загрузить</button>
                    </div>
                </form>

                <form id="seo_upload" action="" method="POST" enctype="multipart/form-data">
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                        <span class="btn btn-success fileinput-button">
                            <span>Add files...</span>
                            <input type="file" name="files[]" accept="application/vnd.ms-excel" multiple>
                        </span>
                            <button type="submit" class="btn btn-primary start">
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <span>Cancel upload</span>
                            </button>
                            <button type="button" class="btn btn-danger delete">
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" class="toggle">
                            <span class="fileupload-process"></span>
                        </div>
                        <div class="col-lg-5 fileupload-progress fade">
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
        <!-- ========================= /Динамический контент ============================ -->

        <!-- ========================= Преимущества ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Преимущества</h2>
                <div class="b-admin__current">
                    <h3>Список перимуществ</h3>
                    <div class="b-admin__list">
                        <div class="b-admin__list-item">
                            Преимущество 1
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            Преимущество 2
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            Преимущество 3
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="#" class="b-admin__form">
                    <h3>Добавить преимущество</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Преимущество"/>
                    </div>
                    <div class="form-group">
                        <button class="btn">Добавить преимущества</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ========================= /Преимущества ============================ -->

        <!-- ========================= Отзывы ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Отзывы</h2>
                <div class="b-admin__current">
                    <h3>Список отзывов</h3>
                    <div class="b-admin__list">
                        <div class="b-admin__list-item">
                            Ссылка на отзыв на ютубе
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            Ссылка на отзыв на ютубе
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            Ссылка на отзыв на ютубе
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="#" class="b-admin__form">
                    <h3>Добавить отзыв</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Ссылка на youtube"/>
                    </div>
                    <div class="form-group">
                        <button class="btn">Добавить отзыв</button>
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
                    <h3>Список сертификатов</h3>
                    <div class="b-admin__list">
                        <div class="b-admin__list-item">
                            <img src="#" alt="" class="b-admin__certificate-img"/>
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            <img src="#" alt="" class="b-admin__certificate-img"/>
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            <img src="#" alt="" class="b-admin__certificate-img"/>
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="#" class="b-admin__form">
                    <h3>Добавить сертификат</h3>
                    <div class="form-group">
                        <input type="file" placeholder="Загрузить сертификат"/>
                    </div>
                    <div class="form-group">
                        <button class="btn">Добавить сертификат</button>
                    </div>
                </form>
            </div>










            <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button">
                            <span>Add files...</span>
                            <input type="file" name="files[]" accept="image/jpg,image/png,image/jpeg,image/gif" multiple>
                        </span>
                        <button type="submit" class="btn btn-primary start">
                            <span>Start upload</span>
                        </button>
                        <button type="reset" class="btn btn-warning cancel">
                            <span>Cancel upload</span>
                        </button>
                        <button type="button" class="btn btn-danger delete">
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" class="toggle">
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fileupload-progress fade">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
            </form>
            <!-- The template to display files available for upload -->
            <script id="template-upload" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                    <td>
                        <span class="preview"></span>
                    </td>
                    <td>
                        <p class="name">{%=file.name%}</p>
                        <strong class="error text-danger"></strong>
                    </td>
                    <td>
                        <p class="size">Processing...</p>
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                    </td>
                    <td>
                        {% if (!i && !o.options.autoUpload) { %}
                            <button class="btn btn-primary start" disabled>
                                <span>Start</span>
                            </button>
                        {% } %}
                        {% if (!i) { %}
                            <button class="btn btn-warning cancel">
                                <span>Cancel</span>
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
                    <td>
                        <span class="preview">
                            {% if (file.thumbnailUrl) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                            {% } %}
                        </span>
                    </td>
                    <td>
                        <p class="name">
                            {% if (file.url) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                            {% } else { %}
                                <span>{%=file.name%}</span>
                            {% } %}
                        </p>
                        {% if (file.error) { %}
                            <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                        {% } %}
                    </td>
                    <td>
                        <span class="size">{%=o.formatFileSize(file.size)%}</span>
                    </td>
                    <td>
                        {% if (file.deleteUrl) { %}
                            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" name="delete" value="1" class="toggle">
                        {% } else { %}
                            <button class="btn btn-warning cancel">
                                <span>Cancel</span>
                            </button>
                        {% } %}
                    </td>
                </tr>
            {% } %}
            </script>






        </div>
        <!-- ========================= /Сертификаты ============================ -->

        <!-- ========================= Управление пользователями ============================ -->
        <div class="row">
            <div class="col-xs-12">
                <h2>Управление пользователями</h2>
                <div class="b-admin__current">
                    <h3>Список пользователей</h3>
                    <div class="b-admin__list">
                        <div class="b-admin__list-item">
                            Пользователь 1
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                        <div class="b-admin__list-item">
                            Пользователь 2
                            <a href="#" class="b-admin__delete" title="Удалить">
                                <i class="ico ico-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="#" class="b-admin__form">
                    <h3>Добавить пользователя</h3>
                    <div class="form-group">
                        <input type="file" placeholder="Добавить пользователя"/>
                    </div>
                    <div class="form-group">
                        <button class="btn">Добавить пользователя</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ========================= /Управление пользователями ============================ -->

    </div>
    <!-- ============================ SCRIPTS ==================================== -->
    <script src="/laravel/resources/assets/build/js/vendor.min.js"></script>
    <script src="/laravel/resources/assets/build/js/scripts.min.js"></script>
    <!-- ============================ /SCRIPTS ==================================== -->

</body>
</html>
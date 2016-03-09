$(function () {
    'use strict';

    var El = {
        $certUp: $('#fileupload'),
        $seoUp: $('#seo_upload')
    };

    El.$certUp.fileupload({
        url: '/admin/file-upload/'
    });

    // Enable iframe cross-domain access via redirect option:
    El.$certUp.fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    // Load existing files:
    El.$certUp.addClass('fileupload-processing');
    $.ajax({
        url: El.$certUp.fileupload('option', 'url'),
        dataType: 'json',
        context: El.$certUp[0]
    }).always(function () {
        $(this).removeClass('fileupload-processing');
    }).done(function (result) {
        $(this).fileupload('option', 'done')
            .call(this, $.Event('done'), {result: result});
    });

    // ===============================================================================

    El.$seoUp.fileupload({
        url: '/admin/seo-upload/'
    });

    // Enable iframe cross-domain access via redirect option:
    El.$seoUp.fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    // Load existing files:
    El.$seoUp.addClass('fileupload-processing');
    $.ajax({
        url: El.$seoUp.fileupload('option', 'url'),
        dataType: 'json',
        context: El.$seoUp[0]
    }).always(function () {
        $(this).removeClass('fileupload-processing');
    }).done(function (result) {
        $(this).fileupload('option', 'done')
            .call(this, $.Event('done'), {result: result});
    });


});

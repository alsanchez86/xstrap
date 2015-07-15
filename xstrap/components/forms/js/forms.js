// components required:
//
// popover
// modal

function actionForm () {

    var text  = $('#form-text');
    //var email = $('#form-email');
    //var check = $('#form-checkbox');

    text
        .popover ('destroy')
        .keydown (function () {

            text.popover ('destroy');
        });

    /*email
        .popover ('destroy')
        .keydown (function () {

            email.popover ('destroy');
        });*/

    /*check
        .popover ('destroy')
        .click (function () {

            check.popover ('destroy');
        });*/

    if (text.val () == '')              return reqInput (text,  'You must enter a text.');
    /*if (email.val () == '')             return reqInput (email, 'You must enter an valid email.');
    if (! validateEmail (email.val ())) return reqInput (email, 'Your email is not valid.');
    if (! check.is (':checked'))        return reqInput (check, 'You must accept the terms and conditions.');*/

    //sendForm ($('#login-form').serialize ());
}

function sendForm (datos) {

    $.post (
        window.baseUrl + "/share/email",
        {data: datos, cache: false})
        .done (function (data) {

            if (data) return modalDefault (data, 1500);
            modalDefault ('<p class="text-center">An unexpected error has occurred. Please, try again.</p>', 1500);
        })
        .fail (function () {

            modalDefault ('<p class="text-center">An unexpected error has occurred. Please, try again.</p>', 1500);
        });
}

function reqInput (input, text) {

    // require popover component
    input
        .popover ({
            animation:  true,
            trigger:    'manual',
            placement:  'bottom',
            container:  'body',
            html:       true,
            content:    text
        })
        .popover ('show')
        .focus ();
}

function validateEmail (valor) {

    var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (filter.test (valor)) return true;
    return false;
}
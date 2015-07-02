function actionForm (route) {

    var name  = $('#fullname');
    var email = $('#email');
    var agree = $('#agree');

    name
        .popover ('destroy')
        .keydown (function () {

            name.popover ('destroy');
        });

    email
        .popover ('destroy')
        .keydown (function () {

            email.popover ('destroy');
        });

    agree
        .popover ('destroy')
        .click (function () {

            agree.popover ('destroy');
        });

    if (name.val () == '')              return reqInput (name,  'You must enter a name.');
    if (email.val () == '')             return reqInput (email, 'You must enter an valid email.');
    if (! validateEmail (email.val ())) return reqInput (email, 'Your email is not valid.');
    if (! agree.is (':checked'))        return reqInput (agree, 'You must accept the terms and conditions.');

    sendForm ($('#login-form').serialize ());
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
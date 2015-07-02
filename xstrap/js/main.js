var preload = [];

jQuery (document).ready (function($) {

    bootstrap ();
    if (typeof preload  != 'undefined') preLoad ();
    responsive ();
});

$(window)
    .resize (function () {

        responsive ();
    })
    .scroll (function () {

    })
    .load (function () {

    });

// bootstrap
function bootstrap () {

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {

        var msViewportStyle = document.createElement ('style');

        msViewportStyle.appendChild (document.createTextNode ('@-ms-viewport{width:auto!important}'));
        document.querySelector ('head').appendChild (msViewportStyle);
    }

    var nua       = navigator.userAgent;
    var isAndroid = (nua.indexOf ('Mozilla/5.0') > -1 && nua.indexOf ('Android ') > -1 && nua.indexOf ('AppleWebKit') > -1 && nua.indexOf ('Chrome') === -1);

    if (isAndroid) $('select.form-control').removeClass ('form-control').css ('width', '100%');
}
// end

// responsive
function responsive () {

    var ventana = $(window).width ();

    if (ventana >= 1185)  return lg ();
    if (ventana >= 977)   return md ();
    if (ventana >= 753)   return sm ();
    return xs ();
}

function lg () {

}

function md () {

}

function sm () {

}

function xs () {

}
// end

// preload
function preLoad () {

  for (var i = 0; i < preload.length; i++) $('<img />').attr ('src', preload [i]);
}
// end
var preload = [];

jQuery (document).ready (function($) {

    bootstrap ();
    if (typeof preload  != 'undefined') preLoad ();
    //responsive ();
});

$(window)
    .on ({
        load: function () {

            affix ();
            affixResize ();
        },
        resize: function () {
            //responsive ();
            affixResize ();
        },
        scroll: function () {

        }
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

// responsive
/*function responsive () {

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

}*/

// preload
function preLoad () {

  for (var i = 0; i < preload.length; i++) $('<img />').attr ('src', preload [i]);
}

// affix
function affix () {

    $('#spy-affix-nav')
        .affix({
            offset: {
                top: function () {

                    return $('#header').outerHeight () + 20;
                },
                bottom: function () {

                    return $('#footer').outerHeight ();
                }
            }
        });
}

function affixResize () {

    var affix = $('#spy-affix-nav');

    affix
        .css ({
            width:  affix.parent ().width (),
            height: $(window).height () - 40
        });
}
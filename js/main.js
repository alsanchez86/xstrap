var preload = [];

jQuery (document).ready (function($) {

    /* basics */
    if (typeof preload != 'undefined') preLoad (preload);
    bootstrap ();
    responsive ();

    /* bootstrap behavior */
    //modalEvent ();

    /* general */
    //scrollReady ();
    //dropdownHover ($('#menu-fixed'));
    //navBarOffset (navbarOffset);
});

$(window)
    .resize (function () {

        popoverHide ();
        responsive ();
    })
    .scroll (function (event) {

        popoverHide ();
        //navBarOffset (navbarOffset);
    })
    .load (function () {

    });

/* bootstrap */
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
/* -- */

/* responsive */
function responsive () {

    //bootstrap [break-points]
    var ventana = $(window).width ();

    if (ventana >= 1185)  return lg ();
    if (ventana >= 977)   return md ();
    if (ventana >= 753)   return sm ();
    return xs ();
}

function lg () {

    //dropdownData (true, $('#menu-fixed'));
}

function md () {

    //dropdownData (true, $('#menu-fixed'));
}

function sm () {

    //dropdownData (false, $('#menu-fixed'));
}

function xs () {

    //dropdownData (false, $('#menu-fixed'));
}
/* -- */

/* preLoad imgs */
function preLoad (imgs) {

  for (var i = 0; i < imgs.length; i++) $('<img />').attr ('src', imgs [i]);
}
/* -- */

/* dropdowns */
function dropdownData (hover, context) {

    $('.btn-group, .dropdown', context)
        .data ({hover: hover, open: false});

    if (hover) dropdownClose (context); //cerramos todos los dropdown-menu al resize
}

function dropdownHover (context) {

    //enlace padre del grupo
    $('.dropdown-toggle', context)
        .click (function (event) {

            event.preventDefault ();

            var group   = $(this).parent ('.dropdown');
            var hover   = group.data ('hover');
            var open    = group.data ('open');
            var href    = $(this).attr ('href');
            var ul      = $('.dropdown-menu', group).length;

            if (! hover) {

                dropdownClose (context);
                group
                    .data ('open', true)
                    .addClass ('open');
            }

            if (! $(this).hasClass ('scroll')) window.location = href;
            if (hover || (open && href && ul)) return scrollTop (href, scrollTopOffset);
        })
        .mouseenter (function () {

            var group    = $(this).parent ('.dropdown');
            var menu     = $('.dropdown-menu', group);

            if (group.data ('hover')) {

                menu.css ({minWidth: group.outerWidth (), top: group.outerHeight ()});
                group.addClass ('open');
                return;
            }

            menu.css ({top: '100%'});
        });

    //cerrar grupo al mouseleave
    $('.btn-group, .dropdown', context)
        .mouseleave (function () {

            if ($(this).data ('hover')) dropdownClose (context);
        });
}

function dropdownClose (context) {

    $('.btn-group.open, .dropdown.open', context)
        .data ('open', false)
        .removeClass ('open');
}
/* -- */

/* modal */
function modalDefault (text) {

    var modal = $('#modal-default');

    $('.modal-body', modal).html (text);
    modal.modal ('show');
}

function modalEvent () {

    $('.modal')
        .on ('show.bs.modal', function (e) {

            popoverHide ();

            if ($('.modal').hasClass ('in')) $('.modal').modal ('hide');
            if ($('#menu-fixed').hasClass ('in')) $('.navbar-toggle').click ();
        })
        .on ('hide.bs.modal', function () {

            popoverHide ();
        })
        .on ('hidden.bs.modal', function () {

            $('body').css ({padding: 0}); //fix bootstrap bug
        });
}
/* -- */

/* popover */
function popoverHide () {

    $('.popover').popover ('hide');
}
/* end popover */
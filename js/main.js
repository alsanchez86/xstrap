var preload         = [];
var scrollTopOffset = 15;

jQuery (document).ready (function($) {

    /* basics */
    bootstrap ();
    if (typeof preload != 'undefined') preLoad (preload);
    responsive ();

    /* bootstrap behavior */
    modalEvent ();
    modalButtons ();

    /* general */
    scrollReady ();
    dropdownHoverNavbar ($('#menu-fixed'));
    //offCanvas ($('#btn-offcanvas-menu'),    $('#row-offcanvas-menu'));
    //navBarOffset (50);
    //rwdImageMaps ();
    //xstrapFunny ();

    if (! issetCookie ('ximcom-cookies')) {

        createCookie ('ximcom-cookies', 1, 15);
        cookiesPopup (false);
    }
});

$(window)
    .resize (function () {

        popoverHide ();
        responsive ();
    })
    .scroll (function (event) {

        popoverHide ();
        //navBarOffset (50);
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

/* scroll */
function scrollReady () {

    $('#navbar').data ('ready', true);

    $('.scroll')
        .not ('.dropdown-toggle')
        .click (function (event) {

            event.preventDefault();
            scrollTop ($(this).attr ('href'), scrollTopOffset);
        });
}

function scrollTop (destino, offtop) {

    if (! destino || destino == '#' || ! $(destino).length) return;

    var navbar  = $('#navbar');
    var lap     = $(destino).offset().top - $('#navbar-header', navbar).outerHeight () - offtop;
    var current = $(window).scrollTop ();

    if (! navbar.data ('ready') || (lap == -navbarOffset && ! current) || (lap == current)) return;
    if ($('#menu-fixed').hasClass ('in')) $('.navbar-toggle').click ();

    navbar.data ('ready', false);
    $('html, body')
        .stop ()
        .animate({
            scrollTop: lap
        }, 1500, 'easeInOutExpo', function (event) {

            navbar.data ('ready', true);
        });
}

function checkIndexScroll (init, end, min) {

    var current = $(window).scrollTop ();
    var checked = 0;

    if (current <= init)    return min;
    if (current >= end)     return 1;

    checked = ((current - init) / (end - init)).toFixed (2);

    if (checked <= min) return min;
    return checked;
}
/* -- */

/* dropdowns */
function dropdownData (hover, context) {

    $('.btn-group, .dropdown', context)
        .data ({hover: hover, open: false});

    dropdownClose (hover, context); //cerramos todos los dropdown-menu al resize
}

function dropdownHoverBtnGroup (context) {

    $('.dropdown-toggle', context)
        .click (function (event) {

            event.preventDefault ();
        });

    $('.btn-group', context)
        .click (function (event) {

            var hover   = $(this).data ('hover');
            var open    = $(this).data ('open');
            var href    = $('a.btn', $(this)).attr ('href');
            var ul      = $('.dropdown-menu', $(this)).length;

            $(this).data ('open', ! open);
            if (hover || (open && href && ul)) return window.location = href;
        })
        .mouseenter (function () {

            var btnGroup    = $(this);
            var menu        = $('.dropdown-menu', btnGroup);

            if (btnGroup.data ('hover')) {

                menu.css ({minWidth: btnGroup.outerWidth (), top: btnGroup.outerHeight ()});
                btnGroup.addClass ('open');
                return;
            }

            menu.css ({top: '100%'});
        })
        .mouseleave (function () {

            $(this).data ('open', false);
            dropdownClose ($(this).data ('hover'), context);
        });
}

function dropdownHoverNavbar (context) {

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

function dropdownClose (hover, context) {

    if (! hover) return;

    $('.btn-group.open, .dropdown.open', context)
        .data ('open', false)
        .removeClass ('open');
}
/* -- */

/* navbar offset */
function navBarOffset (offset) {

    var navbar = $('#navbar');

    if (! navbar.length) return;
    if (navbar.offset().top > offset)   navbar.addClass ('navbar-offset');
    else                                navbar.removeClass ('navbar-offset');
}
/* -- */

/* modal */
function modalDefault (text) {

    var modal = $('#modal-default');

    if (! modal.length) return console.log ('Error modalDefault (). #modal-default (div) no instalado.');
    $('.modal-body', modal).html (text);
    modal.modal ('show');
}

function modalEvent () {

    $('.modal')
        .on ('show.bs.modal', function (e) {

            popoverHide ();
            if ($('.modal').hasClass ('in')) $('.modal').modal ('hide');
            //if ($('#menu-fixed').hasClass ('in')) $('.navbar-toggle').click ();
        })
        .on ('hide.bs.modal', function () {

            popoverHide ();
        })
        .on ('hidden.bs.modal', function () {

            $('body').css ({padding: 0}); //fix bootstrap bug
        });
}
/* -- */

/* modal buttons */
function modalButtons () {

    $('#modal-politica-cookies')
        .click (function () {

            modalDefault ('<h4>Política de Cookies</h4><p>Open Ximdex Evolution SL informa al Usuario del uso que se hacen de las cookies en su Portal Web en Internet formado por diversos subdominios bajo <a href="http://www.ximdex.com/">http://www.ximdex.com/</a>, ximdex.net, ximdex.es y ximdex.org.</p><h5>¿Qué son las cookies?</h5><p>Son pequeños ficheros de texto que se almacenan en la caché del navegador y que en la práctica se utilizan para poder recuperar datos en futuras visitas. Estos datos por lo general pueden tener una finalidad técnica (ej.: para el correcto funcionamiento del sitio), analítico (ej.: para la consulta de métricas de navegación) o social (ej.: para compartir información sobre el sitio).</p><h5>Aceptación de cookies</h5><p>La aceptación de cookies implica que consiente la utilización de las cookies definidas en los sitios mencionados al principio del documento.</p><p>Es posible deshabilitar las cookies en cualquier momento mediante el ajuste de la configuración de su navegador. Deshabilitar las cookies puede afectar a la correcta navegación a través de nuestros sitios web o al uso de los productos expuestos. Usando las opciones propias de cada navegador, podrá borrarlas o consultar el tiempo de vigencia de cada una de ellas.</p><ul class="lista"><li>Para información adicional sobre Chrome pulsa <a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank">aquí</a>.</li><li>Para información adicional sobre Firefox pulsa <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank">aquí</a>.</li><li>Para información adicional sobre Internet Explorer pulsa <a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank">aquí</a>.</li><li>Para información adicional sobre Safari pulsa <a href="https://support.apple.com/kb/PH5042?viewlocale=en_US&locale=en_US" target="_blank">aquí</a>.</li></ul><h5>Cookies en Portal Web Ximdex</h5><ul class="lista"><li>Cookies propias de Ximdex. Cookies permanentes de tipo técnico para la gestión de cookies en el Portal así como de control de sesión de los productos expuestos.</li><li>Cookies de terceros de “Analytics” de Google Inc: Cookies permanentes de terceros para análisis del tráfico web recopilando métricas de la navegación del Usuario tales como duración de la visita al Sitio Web, páginas visitadas, procedencia geográfica del Usuario, etc.</li><li>Cookies de terceros de Tipo Social: Cookies permanentes de terceros para ayudar a compartir las páginas web del Portal Ximdex a través de email, redes sociales, etc.</li></ul>');
        });
}
/* end modal buttons */

/* popover */
function popoverHide () {

    $('.popover').popover ('hide');
}
/* end popover */

/* offcanvas */
function offCanvas (btn, row) {

    var delay = 300;

    btn.data ('active', false);
    btn.click (function (event) {

        var btn         = $(this);
        var active      = btn.data ('active');
        var priority    = btn.attr ('data-offcanvas-priority') ? parseInt(btn.attr ('data-offcanvas-priority')): 0;
        var others      = $('[data-toggle="offcanvas"].active').not (btn);

        active = ! active;
        btn.data ('active', active);

        others
            .each (function () {

                var auxBtn      = $(this);
                var auxActive   = auxBtn.data ('active');
                var auxPriority = auxBtn.attr ('data-offcanvas-priority') ? parseInt(auxBtn.attr ('data-offcanvas-priority')) : 0;

                if (auxActive && (auxPriority < priority)) auxBtn.click ();
            });

        if (! others.length) {

            btn.toggleClass ('active');
            row.toggleClass ('active');
        }else setTimeout (function () {

            btn.click ();
        }, delay);
    });
}
/* end offcanvas */

/* subir */
function subir () {

    var destino = $('#row-offcanvas-aside').offset().top;

    $('html, body')
        .stop ()
        .animate({
            scrollTop: destino - 20
        }, 1500, 'easeInOutExpo');
}
/* end subir */

/* image Map Responsive */
function rwdImageMaps () {

  $('img[usemap]').rwdImageMaps ();
}
/* -- */

/* cookies */
function createCookie (nombre, valor, caducidad){

   var fecha = new Date();
   fecha.setDate(fecha.getDate () + caducidad);

   var cookie = escape (valor) + '; expires="' + fecha.toUTCString () + '; path=/';
   document.cookie = nombre + '=' + cookie;
}

function issetCookie (name){

    var cookie        = name + "=";
    var almacenadas   = document.cookie;
    var comienzo      = 0;
    var fin           = 0;

    if (almacenadas.length > 0) {

        comienzo = almacenadas.indexOf (cookie);

        if (comienzo != -1) {

            comienzo += cookie.length;
            fin = almacenadas.indexOf (";", comienzo);

            if (fin == -1) fin = almacenadas.length;
            return unescape (almacenadas.substring(comienzo, fin));
        }
    }

    return false;
}
/* end cookies */

/* xstrap funny */
function xstrapFunny () {

    jQuery (document)
        .keydown (function (event) {

            if (event.which === 65 && event.shiftKey) {

                $banana = $('<marquee><img width="40" src="http://i.imgur.com/s6i6Q.gif"> WEB GENERATED BY XSTRAP 1.0 <img width="40" src="http://i.imgur.com/s6i6Q.gif"></marquee>').css ({position:'absolute',top:'30px','z-index':9999});
                $('body').prepend($banana);
            }
    });
}
/* end xstrap funny */
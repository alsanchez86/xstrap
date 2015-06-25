var preload = [];

jQuery (document).ready (function($) {

    bootstrap ();
    if (typeof preload  != 'undefined') preLoad ();
    responsive ();

    //modals
    //modalButtons ();
});

$(window)
    .resize (function () {

        responsive ();
    })
    .scroll (function (event) {

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

}

function md () {

}

function sm () {

}

function xs () {

}
/* -- */

/* preload */
function preLoad () {

  for (var i = 0; i < preload.length; i++) $('<img />').attr ('src', preload [i]);
}
/* end preload */

//modals buttons
/*function modalButtons () {

    modalButton ($('#modal-accesibilidad'), '<h4>ACCESSIBILITY</h4><p>This page has been created using HTML 5 and style sheets (CSS 3). The presentation language used is the result of the transformation of the original documents, which have been constructed in a structured manner using XML, and have been generated by the semantic content manager Ximdex CMS</p><p>The web pages comply with the HTML 5 and CSS 3 W3C validations, and have been created in accordance with the Web Content Accessibility Guidelines (WCAG). In accordance with the Web Accessibility Initiative (WAI), compliance level 2</p><p>Site navigation has been tested on different devices (PC, tablets, and smartphones) on the latest versions of the web browsers Internet Explorer, Mozilla Firefox, Google Chrome, Safari and Opera. Note: This declaration of conformity includes the pages located under the domain <a href="http://www.ximdex.com/">http://www.ximdex.com/</a>, excluding pages that may be accessed via links or external applications.</p>');
}*/
//end modals buttons
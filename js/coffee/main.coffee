preLoadImgs = ['./images/cargando.gif'];

jQuery ->
    bootstrap()
    if typeof preLoadImgs  != 'undefined'
        preLoad()
    # //responsive ();
    # datepicker ($('#form-datetime'));
    # datepicker ($('#form-datetime-2'));
    # confirmation ();
    # typeHead ();

$(window)
    .on ({
        load: () ->
            affix()
            # affixResize ();
        resize: () ->
            # //responsive ();
            # affixResize ();

        scroll: () ->
            # affixResize ();
    });

preLoad = () ->
    $('<img />').attr src: preLoadImgs for i in preLoadImgs

bootstrap = () ->
    if navigator.userAgent.match(/IEMobile\/10\.0/)
        msViewportStyle = document.createElement ('style');
        msViewportStyle.appendChild (document.createTextNode ('@-ms-viewport{width:auto!important}'));
        document.querySelector ('head').appendChild (msViewportStyle);

    nua       = navigator.userAgent;
    isAndroid = (nua.indexOf ('Mozilla/5.0') > -1 && nua.indexOf ('Android ') > -1 && nua.indexOf ('AppleWebKit') > -1 && nua.indexOf ('Chrome') == -1);

    if isAndroid
        $('select.form-control')
            .removeClass 'form-control'
            .css
                width: '100%'

affix = () ->
    $('#spy-affix-nav')
        .affix({
            offset: {
                top: () ->
                    return $('#header').outerHeight() + 20;

                bottom: () ->
                    return $('#footer').outerHeight();
            }
        });
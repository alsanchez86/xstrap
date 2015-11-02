preLoadImgs         = ['./images/cargando.gif']
$window             = $(window)
$affixTarget        = [$('#spy-affix-nav')]
$datePickerTarget   = [$('#form-datetime'), $('#form-datetime-2')]
$typeAheadTarget    = [$('#form-typeahead')]
$confirmationTarget = $('[data-toggle="confirmation"]')

jQuery ->
    bootstrap()
    if typeof preLoadImgs  != 'undefined'
        preLoad()
    responsive()
    datePicker($datePickerTarget)
    typeAhead($typeAheadTarget)
    confirmation()

$window
    .on
        load: () ->
            affix($affixTarget)
            affixResize($affixTarget)
        resize: () ->
            responsive()
            affixResize($affixTarget)
        scroll: () ->
            affixResize($affixTarget)

preLoad = () ->
    for i in preLoadImgs
        $('<img />').attr src: preLoadImgs

bootstrap = () ->
    if navigator.userAgent.match(/IEMobile\/10\.0/)
        msViewportStyle = document.createElement ('style')
        msViewportStyle.appendChild (document.createTextNode ('@-ms-viewport{width:auto!important}'))
        document.querySelector ('head').appendChild (msViewportStyle)

    nua       = navigator.userAgent
    isAndroid = (nua.indexOf ('Mozilla/5.0') > -1 && nua.indexOf ('Android ') > -1 && nua.indexOf ('AppleWebKit') > -1 && nua.indexOf ('Chrome') == -1)

    ###
        if isAndroid
        $('select.form-control')
            .removeClass 'form-control'
            .css
                width: '100%'
    ###

responsive = () ->
    width = $window.width()

    if width >= 1185
        lg()
    if width >= 977
        md()
    if width >= 753
        sm()
    xs()

lg = () ->
md = () ->
sm = () ->
xs = () ->

affix = (target) ->
    for i in target
        i.affix
            offset: {
                top: () ->
                    return $('#header').outerHeight() + 20

                bottom: () ->
                    return $('#footer').outerHeight()
            }

affixResize = (target) ->
    for i in target
        i.css
            width:  i.parent().width()
            height: $window.height() - 40

datePicker = (target) ->
    for i in target
        i.datepicker()

substringMatcher = (strs) ->
    findMatches = (q, cb) ->
        matches     = []
        substrRegex = new RegExp(q,'i')
        $.each strs, (i, str) ->
            if substrRegex.test str
                matches.push str
                return
        cb(matches)

typeAhead = (target) ->
    states = [
                'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
                'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
                'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
                'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
                'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
                'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
                'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
                'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
            ]

    for i in target
        i.typeahead {
            hint: true
            highlight: true
            minLength: 1
        },
        {
            source: substringMatcher(states)
        }

confirmation = () ->
    $confirmationTarget
        .click () ->
            $(this)
                .popover
                    animation:  true
                    html:       true
                    trigger:    'manual'
                    placement:  'bottom'
                    container:  'body'
                    content:    '<button>Are you sure?</button>'
                .popover('toggle')
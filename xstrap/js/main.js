var preload = [];

jQuery (document).ready (function($) {

    bootstrap ();
    if (typeof preload  != 'undefined') preLoad ();
    //responsive ();
    datepicker ($('#form-datetime'));
    confirmation ();
    typeHead ();
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
            affixResize ();
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

    var $affix      = $('#spy-affix-nav');
    var $window     = $(window);

    $affix
        .css ({
            width:  $affix.parent ().width (),
            height: $window.height () - 40
        });
}

// datepicker
function datepicker (input) {

    input.datepicker ();
}

// confirmation
function confirmation () {

    $('[data-toggle="confirmation"]')
        .click (function () {

            $(this)
                .popover ({
                    animation:  true,
                    html:       true,
                    trigger:    'manual',
                    placement:  'bottom',
                    container:  'body',
                    content:    '<button>Are you sure?</button>'
                })
                .popover ('toggle');
        });

}

// typehead
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

function typeHead () {

    var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
                  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
                  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
                  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
                  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
                  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
                  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
                  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
                ];

    $('#form-typeahead')
        .typeahead ({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            //name: 'states',
            source: substringMatcher (states)
        });
}
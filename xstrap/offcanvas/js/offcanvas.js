/* offcanvas */
function offCanvas (btn, row) {

    var delay = 350; //debe ser mayor que @offcanvas-time;

    btn
        .data ('active', false)
        .click (function (event) {

            event.preventDefault ();

            var error       = false;
            var btn         = $(this);
            var active      = btn.data ('active');
            var priority    = btn.attr ('data-offcanvas-priority') ? parseInt(btn.attr ('data-offcanvas-priority')): 0;
            var others      = $('[data-toggle="offcanvas"].active').not (btn);

            btn.data ('active', ! active);
            others
                .each (function () {

                    var auxBtn      = $(this);
                    var auxActive   = auxBtn.data ('active');
                    var auxPriority = auxBtn.attr ('data-offcanvas-priority') ? parseInt(auxBtn.attr ('data-offcanvas-priority')) : 0;

                    if (auxPriority > priority) return error = true;
                    if (auxActive && (auxPriority < priority)) auxBtn.click ();
                });

            if (! others.length) {

                btn.toggleClass ('active');
                row.toggleClass ('active');
            }else setTimeout (function () {

                if (! error) btn.click ();
            }, delay);
        });
}
/* end offcanvas */
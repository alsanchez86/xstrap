jQuery (document).ready (function($) {

    xstrapFunny ();
    glyphiconIcomoonLists ();
});

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

function glyphiconIcomoonLists () {

	var glyphiconBtn 	= $('#show-glyphicon-list');
	var icomoonBtn 		= $('#show-icomoon-list');

	glyphiconBtn
		.click (function (event) {

			event.preventDefault ();
			$('#glyphicon-list-xstrap').slideToggle ();
		});

	icomoonBtn
		.click (function (event) {

			event.preventDefault ();
			$('#icomoon-list').slideToggle ();
		});
}
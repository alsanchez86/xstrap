XSTRAP!

Vendors used:

+ jquery [version < 2].
+ From from Bootstrap v3.3.5:
	- normalize.css v3.0.3
	- Grid system
	- Print media styles
	- Utilities
	- Responsive utilities
	- Mixins:
		- Center block
		- Clearfix
		- Grid & Grid framework
		- Hide text
		- Image
		- Opacity
		- Responsive visibility
		- Vendro prefixes

+ Extra (optionals):
	- Glyphicons
	- Icomoon
	- Offcanvas
	- jquery.easing
	- jquery.rwdImageMaps
	- Owl carousel

PENDIENTES:

- Offcanvas: Transformar en widget de jquery y hacer la animacion con .animate () para prevenir con .stop () la animación cuando se le da muchas veces al click del botón offcanvas, y así prevenir el efecto de bote.

BUGS:

- Mixin .space ():

Provoca dos iteracciones en el media query interno al mixin.

h1,h2,h3,h4,h5,h6{margin:0 0 20px 0}
@media (max-width:991px){h1,h2,h3,h4,h5,h6{margin:0 0 15px 0}}
@media (max-width:991px){h1,h2,h3,h4,h5,h6{margin:0 0 15px 0}}

p{margin:0 0 20px 0}
@media (max-width:991px){p{margin:0 0 15px 0}}
@media (max-width:991px){p{margin:0 0 15px 0}}

Estilos de botones:
http://monodraw.helftone.com/

En un futuro, desarrollar super-componentes tipo navbar de bootstrap.
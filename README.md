# xstrap
Guía de diseño (html con todos los elementos y componentes para modificar facilmente su apariencia mediante variables less) basada en Bootstrap.

RUTA DE TRABAJO:

ACTUAL => Boostrap.min.css + (variables.less + mixins + base.less). [Técnica del parche]
XSTRAP => Boostrap.css (variables.less de bootstrap (modificadas y ampliadas al cruzarlas con variables.less mio) + componentes .less (modificados y ampliados al cruzarlo con base.less mio). Los mixins de bootstrap también serán modificados y ampliados al cruzarlos con el mío, pero también se usarán a la hora de escribir el main.less, media-xs.less, media-md.less, ...
En una primera iteracción, se modificarán los componentes de bootstrap a través del base.less (controlado por variables.less), basandose en la técnica del parche de estilos.

1) Terminar de crear el base.less filtrando todos los componentes de bootstrap y creando sus correspondientes variables.less para modificarlos, y modificando los mixins.less según sea conveniente.

En la segunda iteracción, se trabajará directamente con el código fuente de bootstrap, modificando los .less de los componentes directamente (variable.less y .less individual de cada componente, cruzándolo con su correspondiente en base.less), de forma que no provoque la sobreescritura de estilos y ahorrando tamaño en el css final.

2) Fusión de base.less con los componentes de bootstrap directamente modificando el código fuente de este pre-compilación. Fusión de variables.less. Fusión de Mixins.less.

En principio, descartamos la opción final de modificar un config.json para subirlo al compilador de bootstrap y generar un bootstrap personalizado, porque de esta forma perderíamos los cambios realizados en los .less de los componentes de bootstrap al cruzarlos con el base.less y mixins.less. 
Ver variables.less de Bootstrap pre-compilado.

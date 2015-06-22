<!DOCTYPE html>
<html lang="es">
<head>
    <title>XSTRAP 1.0 [min version]</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="Robots" content="all"/>
    <meta name="Revisit-After" content="7"/>
    <meta name="Rating" content="General"/>
    <meta name="Author" content=""/>
    <meta name="owner" content=""/>
    <meta name="generator" content=""/>

    <!-- favicon -->
    <link href="./xstrap/images/favicon.ico" rel="shortcut icon"/>
    <!-- offcanvas -->
    <!-- <link href="./xstrap/extra/offcanvas/css/offcanvas.css" rel="stylesheet"/> -->
    <!-- main -->
    <link href="./xstrap/css/main.css" rel="stylesheet"/>
</head>
<body>

<div class="body-container container">
    <header>
        <h1>
            XSTRAP 1.0
            <small>(Responsive Web Design)</small>
            <img width="40" src="http://i.imgur.com/s6i6Q.gif" alt="banana" title="banana">
        </h1>
    </header>

    <!-- Grid System -->
    <h2>Grid System&nbsp;<span class="glyphicon glyphicon-th"></span></h2>

    <h3>Containers:</h3>

    <p>Dos tipos de container:</p>

    <ul class="list-styled">
        <li>Container <small>(&amp; = container-fluid para XS y SM)</small>: <span class="text-highlight">div.container</span></li>
        <li>Fluid container: <span class="text-highlight">div.container-fluid</span></li>
    </ul>

    <p class="text-highlight">
        (*) Los containers, normales o fluids, podrán contener todo tipo de contenido; y a su vez esté podrá estar organizado en filas y columnas, pero <strong>en ningún caso un container podrá contener a otros containers.</strong>
    </p>

    <p><i>En xstrap, por defecto (ver vars.less) el .container se comportará como .container-fluid para las resoluciones XS y SM.</i></p>

    <div class="doc-rows">
        <br>
        <h3>Rows:</h3>

        <p>
            Existen diferentes métodos para crear el grid system, cada uno pensado para cubrir ciertas necesidades que nos puedan surgir según los requisitos del diseño, tales como grids no múltiplos de 12.
        </p>

        <p><strong>1) Default row (grid múltiplo de 12) creado directamente con el html del grid-system de bootstrap:</strong></p>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
        </div>

        <br>
        <p><strong>2) Custom row (grid múltiplo de 12) creado a través de los mixins de bootstrap .make-row () .make-*-column ():</strong></p>

        <div class="row">
            <div class="custom-col-1">custom-col-1</div>
            <div class="custom-col-2">custom-col-2</div>
            <div class="custom-col-3">custom-col-3</div>
        </div>

        <br>
        <p><strong>3) Custom row (NO multiplo de 12) creado a través de los mixins de bootstrap .make-row () .make-*-column ():</strong></p>

        <p>
            En este caso, se le pasará a los mixins .make-*-column () como parámetro el resultado de dividir 12 por el número de columnas de las que queramos que esté compuesto el grid. Ej: 12 / 5 = 2.4
        </p>

        <div class="row">
            <div class="custom-col-no-12-1">.custom-col-no-12-1</div>
            <div class="custom-col-no-12-2">.custom-col-no-12-2</div>
            <div class="custom-col-no-12-3">.custom-col-no-12-3</div>
            <div class="custom-col-no-12-4">.custom-col-no-12-4</div>
            <div class="custom-col-no-12-5">.custom-col-no-12-5</div>
        </div>

        <br>
        <br>
        <h3>Casos especiales:</h3>

        <p><strong>1) Reset de posición de columnas:</strong></p>

        <p>
            Usar .clearfix cuando queramos resetear/limpiar las posiciones de unas determinadas columnas para una resolución determinada, de forma que las que se encuentren a continuación del div.clearfix, pasarán a ocupar la siguiente línea horizontal.
        </p>

        <p>
            Es muy útil cuando, debido a que las columnas tienen diferentes altos debido a su contenido, obligamos a las nuevas columnas que se añadan a que se posicionen en una nueva línea horizontal respetando la altura de su columna hermana, y no posicionandose en el hueco que quedaría (tal como ocurre por defecto).
        </p>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="clearfix visible-md-block">.clearfix</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
        </div>

        <br>
        <p><strong>2) Desplazamiento de columnas:</strong></p>

        <p>Desplaza columnas hacía la derecha para determinadas resoluciones usando las clases .col-*-offset-*.</p>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-4 col-lg-3 col-lg-offset-5">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
        </div>

        <br>
        <p><strong>3) Unificando filas y columnas:</strong></p>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">.col-xs-12 col-sm-4 col-md-4 col-lg-4</div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                </div>
            </div>
        </div>

        <br>
        <p><strong>4) Ordenación de columnas:</strong></p>

        <p>
            Se puede alterar el orden de las columnas como se desee para determinadas resoluciones, de forma que el orden predispuesto en el HTML del row se pueda alterar cuando el diséño así lo exija.
        </p>

        <div class="row">
            <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
            <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
        </div>
    </div>
    <!-- end Grid System -->

    <!-- Generics -->
    <br>
    <br>
    <h2>Generics&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span></h2>

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <h3>Basics:</h3>

            <ul class="list-styled">
                <li>space</li>
                <li>space-xs-sm</li>
                <li>background-color</li>
                <li>border-radius</li>
                <li>opacity</li>
                <li>shadow-color</li>
                <li>blur</li>
                <li>rotate</li>
                <li>time</li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <h3>Colours:</h3>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="colour c1">
                        c1:<br>#FFF
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="colour c2">
                        c2:<br>#000
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="colour c3">
                        c3:<br>#CCC
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="colour c4">
                        c4:<br>#FF0033
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <h3>Fonts:</h3>

            <p>
                <strong>Glyphicon <small>(Bootstrap Component):</small></strong>
                &nbsp;
                <a id="show-glyphicon-list" class="btn" href="#">Glyphicon-list <small>(modal)</small></a>
            </p>

            <div id="glyphicon-list-xstrap" class="glyphicon-list-xstrap">
                <?php include_once ('./xstrap/glyphicon-list.html') ?>
            </div>

            <p>
                <strong>Icomoon:</strong>
                &nbsp;
                <a id="show-icomoon-list" class="btn" href="#">Icomoon-list <small>(modal)</small></a>
            </p>

            <div id="icomoon-list" class="icomoon-list">
                <?php //include_once ('icomoon-list.php') ?>
            </div>

            <p><strong>Installed Typographies <small>(google fonts)</small></strong>:</p>

            <ul class="list-styled">
                <li>Opensans</li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <h3>Text base:</h3>

            <ul class="list-styled">
                <li>font-family</li>
                <li>font-size</li>
                <li>font-size-xs-sm</li>
                <li>font-weight</li>
                <li>font-style</li>
                <li>color</li>
                <li>line-height</li>
                <li>letter-spacing</li>
                <li>text-align</li>
                <li>text-transform</li>
                <li>text-indent</li>
            </ul>
        </div>
    </div>
    <!-- end Generics -->

    <!-- HTML Elements -->
    <br>
    <h2>
        HTML ELEMENTS
        &nbsp;&nbsp;
        <span class="glyphicon glyphicon-paperclip"></span>
        <small>(not bootstrap components)</small>
    </h2>

    <h3>Links: <small>(a)</small></h3>

    <ol>
        <li><a href="">LINK</a></li>
        <li><a class="blank" href="#" target="_blank">LINK (Target blank)</a></li>
        <li><a class="disabled" href="#">LINK (Disabled)</a></li>
        <li><a href="#">LINK with glyphicon&nbsp;<span class="glyphicon glyphicon-cloud"></span></a></li>
    </ol>

    <h3>Titles: <small>(h1, h2, h3, h4, h5, h6)</small></h3>

    <h1>h1 Title <small>Secondary text</small></h1>
    <h2>h2 Title <small>Secondary text</small></h2>
    <h3>h3 Title <small>Secondary text</small></h3>
    <h4>h4 Title <small>Secondary text</small></h4>
    <h5>h5 Title <small>Secondary text</small></h5>
    <h6>h6 Title <small>Secondary text</small></h6>

    <h3>Paragraphs: <small>(p)</small></h3>

    <p>Esto es un párrafo 1.</p>

    <p>Esto es un párrafo 2.</p>

    <h3>Marked Text: <small>(mark)</small></h3>

    <p>You can use the mark tag to <mark>highlight</mark> text.</p>

    <h3>Deleted Text: <small>(del)</small></h3>

    <p><del>This line of text is meant to be treated as deleted text.</del></p>

    <h3>Strikethrough Text: <small>(s)</small></h3>

    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

    <h3>Inserted Text: <small>(ins)</small></h3>

    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>

    <h3>Underline Text: <small>(u)</small></h3>

    <p><u>This line of text will render as underlined</u></p>

    <h3>Small Text: <small>(small)</small></h3>

    <p><small>This line of text is meant to be treated as fine print.</small></p>

    <h3>Bold Text: <small>(strong)</small></h3>

    <p><strong>Text rendered as bold text.</strong></p>

    <h3>Italic Text: <small>(em, b, i)</small></h3>

    <p><em>EM</em>, <b>B</b>, <i>I</i></p>

    <h3>Abbreviation: <small>(abbr)</small></h3>

    <p>
        <abbr title="attribute">attr</abbr>
        <br>
        <abbr class="initialism" title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.
    </p>

    <h3>Address: <small>(address)</small></h3>

    <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>

    <h3>Blockquotes: <small>(blockquote)</small></h3>

    <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

        <footer>
            Someone famous in <cite title="Source Title">Source Title</cite>
        </footer>
    </blockquote>

    <h3>Lists: <small>(ul, ol, dl)</small></h3>

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
            <p><strong>Unordered:</strong></p>

            <ul>
                <li>item li 1</li>
                <li>item li 2</li>
                <li>item li 3</li>

                <li>
                    <ul>
                        <li>subitem li 1</li>
                        <li>subitem li 2</li>
                        <li>subitem li 3</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
            <p><strong>Ordered:</strong></p>

            <ol>
                <li>item li 1</li>
                <li>item li 2</li>
                <li>item li 3</li>

                <li class="li-no-icon">
                    <ol>
                        <li>subitem li 1</li>
                        <li>subitem li 2</li>
                        <li>subitem li 3</li>
                    </ol>
                </li>
            </ol>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
            <p><strong>Styled:</strong></p>

            <ul class="list-styled">
                <li>item li 1</li>
                <li>item li 2</li>
                <li>item li 3</li>

                <li class="li-no-icon">
                    <ul class="list-styled">
                        <li>subitem li 1</li>
                        <li>subitem li 2</li>
                        <li>subitem li 3</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <p><strong>Inline:</strong></p>

            <ul class="list-inline">
                <li>item li 1</li>
                <li>item li 2</li>
                <li>item li 3</li>
            </ul>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
            <p><strong>Description List:</strong></p>

            <dl>
                <dt>item dt</dt>
                <dd>item dd</dd>
                <dd>item dd</dd>
                <dd>
                    <dl>
                        <dt>item dt</dt>
                        <dd>item dd</dd>
                        <dd>item dd</dd>
                    </dl>
                </dd>
            </dl>
        </div>
    </div>

    <h3>Code: <small>(code, kbd, pre, var, samp)</small></h3>

    <p><strong>Inline:</strong> <small>(code)</small></p>

    <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>

    <p><strong>User input</strong>: <small>(kbd)</small></p>

    <p>
        To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
        To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
    </p>

    <p><strong>Basic block</strong>: <small>(pre)</small></p>

    <pre>(*) En la documentación de bootstrap, aquí van  las "alignment classes" y las "transformation classes", pero para xstrap quedan descartadas debido a la poca versatilidad a la hora de cambiar el alineamiento o el tipo de transformación para distintas resoluciones.</pre>

    <p><strong>Variables</strong>: <small>(var)</small></p>

    <p><strong>Sample output</strong>: <small>(samp)</small></p>

    <!-- end HTML Elements -->

    <!-- <p>Las variables declaradas en variables.less, la mayoría son traspasables al compilador de bootstrap (como @form-group-margin-bottom), de manera que dichos valores de dichas variables se pueden tener en un confing.json que se sube al customize de bootstrap <a href="http://getbootstrap.com/customize/" target="_blank">http://getbootstrap.com/customize/</a> y así se evita que haya estilos duplicados y redefinidos en el CSS.</p>

    <p>Esto provocará que muchos mixins de mixins.less se eliminen.</p>

    <p class="text-highlight">ATENCION:</p>

    <p>
        Si trasladamos el definir el valor de las variables del <strong>variables.less</strong> al <strong>config.json</strong>, tendremos que compilar un bootstrap cada vez que queramos cambiar el valor de alguna de estas, por lo que entorperecería mucho el trabajo.
    </p>

    <p>Se podría dividir el trabajo en dos "ENTORNOS":</p>

    <ul class="list">
        <li>Entorno de DESARROLLO.</li>
        <li>Entorno de PRODUCCIÓN.</li>
    </ul>

    <p><strong>Entorno de DESARROLLO:</strong></p>

    <p>Aquí se definiran el valor de las variables en variables.less</p>

    <p><strong>Entorno de PRODUCCIÓN:</strong></p>

    <p>Aquí se definiran el valor de las variables en config.json</p>

    <p>El proceso de pasar el trabajo del entorno de <strong>DESARROLLO</strong> al entorno de <strong>PRODUCCIÓN</strong> trata de trasladar los valores de variables.less a config.json, y deshabilitar aquellos componentes de Bootstrap que no se usen en el proyecto actual (comentar las líneas correspondientes en config.json).</p> -->
</div>

<?php //include_once ('modal-default.php'); ?>

<!-- jquery [v < 2] -->
<script src="./xstrap/js/jquery.js"></script>
<!-- bootstrap -->
<!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- offcanvas -->
<!-- <script src="./xstrap/extra/offcanvas/js/ie10-viewport-bug-workaround.js"></script> -->
<!-- jquery.easing.min -->
<!-- <script src="./xstrap/extra/js/jquery.easing.min.js"></script> -->
<!-- rwdImageMaps -->
<!-- <script src="./xstrap/extra/js/jquery.rwdImageMaps.min.js"></script> -->
<!-- main -->
<!-- <script src="./xstrap/js/xstrap.js"></script> -->
<!-- main -->
<!-- <script src="./xstrap/js/main.js"></script> -->
</body>
</html>
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

    <ul class="list-styled">
        <li>Container <small>(&amp; = container-fluid para XS y SM)</small>: <span class="text-highlight">div.container</span></li>
        <li>Container Fluid: <span class="text-highlight">div.container-fluid</span></li>
    </ul>

    <!-- <h3>Row Generator:</h3>

    <p>2 formas de generar un row:</p>

    <ul class="list-styled">
        <li>Mediante el ROW Generator de XSTRAP basado en jquery, con la posibilidad de offset, resets, ordering,...</li>
        <li>Mediante los mixins de less de bootstrap, para generar rows personalizados que no se correspondan con el grid (12 columnas) del proyecto.</li>
    </ul>

    <h4>Row Generator by Xstrap:</h4>

    <p>Poner el html aqui, y no en un PHP aparte.</p>

    <h4>Generate Specific Row with LESS Bootstrap Mixins:</h4>

    <p>Ver <a class="blank" href="http://getbootstrap.com/css/#grid-less" target="_blank">http://getbootstrap.com/css/#grid-less</a></p> -->

    <h3>Rows:</h3>

    <p>Default row:</p>

    <div class="row">
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

        <div class="clearfix visible-lg"></div>

        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
    </div>

    <br>
    <p>Custom row:</p>

    <div class="custom-row">
        <div class="custom-col-1">1</div>
        <div class="custom-col-2">2</div>
        <div class="custom-col-3">2</div>
    </div>

    <!-- end Grid System -->

    <!-- Generics -->
    <br>
    <h2>Generics&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span></h2>

    <h3>Colours:</h3>

    <div class="row">
        <div class="colour c1 col-xs-1">c1:<br>#FFF</div>
        <div class="colour c2 col-xs-1">c2:<br>#000</div>
        <div class="colour c3 col-xs-1">c3:<br>#CCC</div>
        <div class="colour c4 col-xs-1">c4:<br>#FF0033</div>
    </div>

    <br>
    <h3>Fonts:</h3>

    <h4>
        Glyphicon <small>(Bootstrap Component)</small>
        &nbsp;
        <a id="show-glyphicon-list" class="btn" href="#">Glyphicon-list</a>
    </h4>

    <div id="glyphicon-list-xstrap" class="glyphicon-list-xstrap">
        <?php include_once ('./xstrap/glyphicon-list.html') ?>
    </div>

    <h4>
        Icomoon:
        &nbsp;
        <a id="show-icomoon-list" class="btn" href="#">Icomoon-list</a>
    </h4>

    <div id="icomoon-list" class="icomoon-list">
        <?php //include_once ('icomoon-list.php') ?>
    </div>

    <h4>Installed Typographies <small>(google fonts)</small>:</h4>

    <ol>
        <li>Opensans</li>
    </ol>
    <!-- end Generics -->

    <!-- HTML Elements -->
    <br>
    <h2>
        HTML ELEMENTS
        &nbsp;&nbsp;
        <span class="glyphicon glyphicon-paperclip"></span>
        <small>(not bootstrap components)</small>
    </h2>

    <h3>Links (a):</h3>

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
<script src="./xstrap/js/main.js"></script>
</body>
</html>
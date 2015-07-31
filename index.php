<!DOCTYPE html>
<html lang="es">
<head>
    <title>XSTRAP 1.0</title>

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
    <!-- main -->
    <link href="./xstrap/css/main.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#spy-affix-nav" data-offset="20">

<div class="body-content">
<header id="header" class="header">
    <h1>XSTRAP <strong>1.0</strong></h1>

    <h2>
        Build your own <strong>front-end</strong> framework.
        <br>
        Think on components.
    </h2>

    <img class="img-responsive img-responsive-center" src="./xstrap/images/xstrap-logo.png" alt="XStrap" title="XStrap">

    <a class="btn-github-header btn" href="https://github.com/alsanchez86/xstrap" target="_blank">View on github&nbsp;&nbsp;<span class="icomoon-github icomoon"></span></a>

    <div class="designed-by-header">
        <i>designed by</i>
        <img src="./xstrap/images/oxe-logo.png" alt="designed by Ximdex" title="designed by Ximdex">
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
            <nav id="spy-affix-nav">
                <ul class="nav">
                    <li><a href="#footer">Go bottom <span class="icomoon icomoon-point-down"></span></a></li>
                    <li><a href="#spy-core">Core</a></li>

                    <li>
                        <a href="#spy-grid-system">Grid</a>

                        <ul>
                            <li><a href="#spy-containers">Containers</a></li>
                            <li><a href="#spy-rows">Rows</a></li>
                            <li><a href="#spy-casos-especiales">Casos especiales</a></li>
                            <li><a href="#spy-grid-utilities">Utilities</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#spy-html-elements">Texts</a>

                        <ul>
                            <li><a href="#spy-links">Links</a></li>
                            <li><a href="#spy-titles">Titles</a></li>
                            <li><a href="#spy-marked">Marked</a></li>
                            <li><a href="#spy-deleted">Deleted</a></li>
                            <li><a href="#spy-strikethrough">Strikethrough</a></li>
                            <li><a href="#spy-inserted">Inserted</a></li>
                            <li><a href="#spy-underline">Underline</a></li>
                            <li><a href="#spy-small">Small</a></li>
                            <li><a href="#spy-bold">Bold</a></li>
                            <li><a href="#spy-italic">Italic</a></li>
                            <li><a href="#spy-abbreviation">Abbreviation</a></li>
                            <li><a href="#spy-address">Address</a></li>
                            <li><a href="#spy-blockquotes">Blockquotes</a></li>
                            <li><a href="#spy-code">Code</a></li>
                            <li><a href="#spy-lists">Lists</a></li>
                        </ul>
                    </li>

                    <li><a href="#spy-tables">Tables</a></li>
                    <li><a href="#spy-forms">Forms</a></li>

                    <li>
                        <a href="#spy-buttons">Buttons</a>

                        <ul>
                            <li><a href="#spy-buttons-groups">Buttons groups</a></li>
                            <li><a href="#spy-buttons-dropdowns">Buttons dropdowns</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#spy-images">Images</a>

                        <ul>
                            <li><a href="#spy-image-gallery">Image gallery</a></li>
                            <li><a href="#spy-image-map">Image map</a></li>
                        </ul>
                    </li>

                    <li><a href="#header">Go top <span class="icomoon icomoon-point-up"></span></a></li>
                </ul>
            </nav>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <p class="text-indent"><strong>Todo en xstrap son componentes</strong>, incluyendo el core, aumentando así la modularidad, la extensibilidad y el mantenimiento de los proyectos creados con xstrap.</p>

            <p>A continuación, se lista los componentes disponibles para la versión vigente de xstrap:</p>
            <br>

            <!-- CORE -->
            <h3 id="spy-core">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Core:
            </h3>

            <p class="text-indent"><strong>Componente base y requerido por el resto de componentes.</strong></p>

            <p>
                A través del core, controlaremos el valor de las variables básicas que afectan a todos los componentes de forma transversal, así como los mixins utilizados para generar dichos componentes.
            </p>

            <p>
                El core tiene incluido por defecto <mark>normalize.css v3.0.3</mark>, para resetear y normalizar por defecto los elementos html.
                <br>
                Además, el core de xstrap hereda el código de <a class="blank" href="http://getbootstrap.com/" target="_blank">bootstrap</a> contenido en <mark>scaffolding <small>(reset.less en xstrap)</small></mark> y <mark>utilities <small>(utilities.less en xstrap)</small></mark>.
            </p>

            <h4>Vars:</h4>

            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>@path-images</li>
                        <li>@path-css</li>
                        <li>@path-components</li>
                        <li>@path-fonts</li>
                        <li>@space</li>
                        <li>@space-small (xs & sm)</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>@background-color</li>
                        <li>@border-radius</li>
                        <li>@opacity</li>
                        <li>@shadow-color</li>
                        <li>@blur</li>
                        <li>@rotate</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>@time</li>
                    </ul>
                </div>
            </div>

            <h4>Mixins:</h4>

            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>.background-cover ()</li>
                        <li>.border ()</li>
                        <li>.box-shadow ()</li>
                        <li>.box-sizing ()</li>
                        <li>.center-block ()</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>.clearfix ()</li>
                        <li>.disabled ()</li>
                        <li>.hide-text ()</li>
                        <li>.not-outline ()</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="list-styled">
                        <li>.opacity ()</li>
                        <li>.space ()</li>
                        <li>.transition ()</li>
                        <li><i>(vendor-prefixes)...</i></li>
                    </ul>
                </div>
            </div>
            <!-- end CORE -->

            <!-- Grid System -->
            <br>
            <h3 id="spy-grid-system">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Grid:
            </h3>

            <p>
                A través del componente grid, podemos crear el sistema de rejilla que mas nos convenga para cada caso, cubriendo así todos los casos (no solamente para filas multiplos de 12).
            </p>

            <p>Xstrap hereda el sistema de rejilla de <a class="blank" href="http://getbootstrap.com/" target="_blank">bootstrap</a>, de forma que mantiene su filosofía de las 4 resoluciones (cada una pensada para un tipo de dispositivo), las cuales son XS, SM, MD y LG, cuyos valores son configurables desde el archivo de control vars.less.</p>

            <h4 id="spy-containers">Containers:</h4>

            <p>Dos tipos de container:</p>

            <ul class="list-styled">
                <li>Container <small>(&amp; = container-fluid para XS y SM)</small>: <span class="text-highlight">div.container</span></li>
                <li>Fluid container: <span class="text-highlight">div.container-fluid</span></li>
            </ul>

            <blockquote>
                <p>
                    (*) Los containers, normales o fluids, podrán contener todo tipo de contenido; y a su vez esté podrá estar organizado en filas y columnas, pero <strong>en ningún caso un container podrá contener a otros containers.</strong>
                </p>

                <p>
                    En xstrap, por defecto (ver vars.less) el .container se comportará como .container-fluid para las resoluciones XS y SM.
                </p>
            </blockquote>

            <div class="doc-rows">
                <h4 id="spy-rows">Rows:</h4>

                <p>
                    Existen diferentes métodos para crear el grid system, cada uno pensado para cubrir ciertas necesidades que nos puedan surgir según los requisitos del diseño, tales como grids no múltiplos de 12.
                </p>

                <p><strong>1) Default row (grid múltiplo de 12) creado directamente en el html con el grid-system de bootstrap:</strong></p>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">.col-xs-12.col-sm-6.col-md-3.col-lg-3</div>
                </div>

                <br>
                <p><strong>2) Custom row (grid múltiplo de 12) creado a través del mixin <u>.make-*-column ()</u> de bootstrap:</strong></p>

                <div class="row">
                    <div class="custom-col-1">custom-col-1</div>
                    <div class="custom-col-2">custom-col-2</div>
                    <div class="custom-col-3">custom-col-3</div>
                </div>

                <br>
                <p><strong>3) Custom row (NO multiplo de 12) creado a través del mixins <u>.make-*-column ()</u> de bootstrap:</strong></p>

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
                <h4 id="spy-casos-especiales">Casos especiales:</h4>

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

            <br>
            <br>
            <h4 id="spy-grid-utilities">Utilities:</h4>

            <p>Heredados de <mark>Responsive: Utility classes</mark> de bootstrap.</p>

            <div class="grid-utilities table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th>&nbsp;</th>
                          <th>XS</th>
                          <th>SM</th>
                          <th>MD</th>
                          <th>LG</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th><code>.visible-xs-*</code></th>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                        </tr>

                        <tr>
                            <th><code>.visible-sm-*</code></th>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                        </tr>

                        <tr>
                            <th><code>.visible-md-*</code></th>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                        </tr>

                        <tr>
                            <th><code>.visible-lg-*</code></th>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                        </tr>

                        <tr>
                            <th><code>.hidden-xs</code></th>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                        </tr>

                        <tr>
                            <th><code>.hidden-sm</code></th>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                        </tr>

                        <tr>
                            <th><code>.hidden-md</code></th>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                            <td class="is-visible">Visible</td>
                        </tr>

                        <tr>
                            <th><code>.hidden-lg</code></th>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-visible">Visible</td>
                            <td class="is-hidden">Hidden</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end Grid System -->

            <!-- Texts -->
            <br>
            <br>
            <h3 id="spy-html-elements">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Texts:
            </h3>

            <h4 id="spy-links">Links: <small>(a)</small></h4>

            <ol>
                <li><a href="">Link</a></li>
                <li><a class="blank" href="#" target="_blank">Link (Target blank) <i>[required glyphicon component]</i></a></li>
                <li><a class="disabled" href="#">Link (Disabled)</a></li>
                <li><a href="#">Link with glyphicon&nbsp;<span class="glyphicon glyphicon-cloud"></span></a></li>
            </ol>

            <h4 id="spy-titles">Titles: <small>(h1, h2, h3, h4, h5, h6)</small></h4>

            <pre>
                &lt;h1&gt;h1 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h1&gt;
                &lt;h2&gt;h2 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h2&gt;
                &lt;h3&gt;h3 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h3&gt;
                &lt;h4&gt;h4 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h4&gt;
                &lt;h5&gt;h5 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h5&gt;
                &lt;h6&gt;h6 Title &lt;small&gt;Secondary text&lt;/small&gt;&lt;/h6&gt;
            </pre>

            <h4 id="spy-paragraphs">Paragraphs: <small>(p)</small></h4>

            <p>Esto es un párrafo 1.</p>

            <p>Esto es un párrafo 2.</p>

            <h4 id="spy-marked">Marked Text: <small>(mark)</small></h4>

            <p>You can use the mark tag to <mark>highlight</mark> text.</p>

            <h4 id="spy-deleted">Deleted Text: <small>(del)</small></h4>

            <p><del>This line of text is meant to be treated as deleted text.</del></p>

            <h4 id="spy-strikethrough">Strikethrough Text: <small>(s)</small></h4>

            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

            <h4 id="spy-inserted">Inserted Text: <small>(ins)</small></h4>

            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>

            <h4 id="spy-underline">Underline Text: <small>(u)</small></h4>

            <p><u>This line of text will render as underlined</u></p>

            <h4 id="spy-small">Small Text: <small>(small)</small></h4>

            <p><small>This line of text is meant to be treated as fine print.</small></p>

            <h4 id="spy-bold">Bold Text: <small>(strong)</small></h4>

            <p><strong>Text rendered as bold text.</strong></p>

            <h4 id="spy-italic">Italic Text: <small>(em, b, i)</small></h4>

            <p><em>EM</em>, <b>B</b>, <i>I</i></p>

            <h4 id="spy-abbreviation">Abbreviation: <small>(abbr)</small></h4>

            <p>
                <abbr title="attribute">attr</abbr>
                <br>
                <abbr class="initialism" title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.
            </p>

            <h4 id="spy-address">Address: <small>(address)</small></h4>

            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <h4 id="spy-blockquotes">Blockquotes: <small>(blockquote)</small></h4>

            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

                <footer>
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>

            <h4 id="spy-code">Code: <small>(code, kbd, pre, var, samp)</small></h4>

            <div class="code-block">
                <p><strong>Inline:</strong> <small>(code)</small></p>

                <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>

                <p><strong>User input</strong>: <small>(kbd)</small></p>

                <p>
                    To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                    To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
                </p>

                <p><strong>Basic block</strong>: <small>(pre)</small></p>

                <pre>
                    (*) En la documentación de bootstrap, aquí van  las "alignment classes" y las "transformation classes", pero para xstrap quedan descartadas debido a la poca versatilidad a la hora de cambiar el alineamiento o el tipo de transformación para distintas resoluciones.
                </pre>

                <p><strong>Variables</strong>: <small>(var)</small></p>

                <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>

                <p><strong>Sample output</strong>: <small>(samp)</small></p>

                <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
            </div>

            <br>
            <h4 id="spy-lists">Lists: <small>(ul, ol, dl)</small></h4>

            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                    <p><strong>Unordered:</strong></p>

                    <ul>
                        <li>item li 1</li>
                        <li>item li 2</li>
                        <li>item li 3</li>

                        <li class="li-no-style">
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

                        <li class="li-no-style">
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

                        <li class="li-no-style">
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
            <!-- end Texts -->

            <br>
            <h3 id="spy-tables">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Tables:
            </h3>

            <h4>Default table:</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1 owighwoef hwioefheoifhwefio</td>
                        <td>2 owighwoef hwioefheoifhwefio</td>
                        <td>3 owighwoef hwioefheoifhwefio</td>
                    </tr>

                    <tr>
                        <td>1 owighwoef hwioefheoifhwefio</td>
                        <td>2 owighwoef hwioefheoifhwefio</td>
                        <td>3 owighwoef hwioefheoifhwefio</td>
                    </tr>
                </tbody>
            </table>

            <h4>Responsive table:</h4>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>1 iuyewg iwgefiwegfiuwe gfiuewf</th>
                            <th>2 iuyewg iwgefiwegfiuwe gfiuewf</th>
                            <th>3 iuyewg iwgefiwegfiuwe gfiuewf</th>
                            <th>1 iuyewg iwgefiwegfiuwe gfiuewf</th>
                            <th>2 iuyewg iwgefiwegfiuwe gfiuewf</th>
                            <th>3 iuyewg iwgefiwegfiuwe gfiuewf</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1 owighwoef hwioefheoifhwefio</td>
                            <td>2 owighwoef hwioefheoifhwefio</td>
                            <td>3 owighwoef hwioefheoifhwefio</td>
                            <td>1 owighwoef hwioefheoifhwefio</td>
                            <td>2 owighwoef hwioefheoifhwefio</td>
                            <td>3 owighwoef hwioefheoifhwefio</td>
                        </tr>

                        <tr>
                            <td>1rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                            <td>2rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                            <td>3rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                            <td>1rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                            <td>2rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                            <td>3rwoufhw ofweou hfwue fheiowufh oweiufh</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-lowlight"><i>(*) Se recomienda usar siempre las <strong>tablas responsives</strong>, ya que para cualquier proyecto el cual tenga incluido el componente grid, las tablas por defecto provocarán scroll horizontal en el navegador, ya que para las resoluciones pequeñas la tabla suele ser mas ancha que la propia ventana.</i></p>

            <!-- FORMS -->
            <br>
            <h3 id="spy-forms">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Forms:
            </h3>

            <p><strong>Supported controls:</strong></p>

            <p>Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>

            <blockquote>
                <p>
                    <strong>Type declaration required</strong>
                    <br>
                    Inputs will only be fully styled if their type is properly declared.
                </p>
            </blockquote>

            <blockquote>
                <p>
                    <strong>Always add labels</strong>
                    <br>
                    Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.
                </p>
            </blockquote>

            <p>Poner aqui otros componentes extras de bootstrap como el colorpicker, datapicker,... <a class="blank" href="http://speckyboy.com/2014/06/16/plugins-for-extending-bootstrap/" target="_blank">http://speckyboy.com/2014/06/16/plugins-for-extending-bootstrap/</a></p>

            <form method="POST" action="javascript:actionForm ()">
                <!-- action="{{ route("register") }}" -->
                <div class="form-group">
                    <label for="form-text">Type <strong>text</strong>:</label>
                    <input type="text" class="form-control" id="form-text" name="form-text" placeholder="Enter your text...">
                </div>

                <div class="form-group">
                    <label for="form-password">Type <strong>password</strong>:</label>
                    <input type="password" class="form-control" id="form-password" name="form-password" placeholder="Enter your password...">
                </div>

                <div class="form-group">
                    <label for="form-readonly">Readonly: <small>(add attribute readonly at the end of the input)</small></label>
                    <input type="text" class="form-control" id="form-readonly" name="form-readonly" placeholder="Readonly" readonly>
                </div>

                <!-- DATEPICKER -->
                <div class="form-group">
                    <label for="form-datetime">Type datetime: <small>Requires <strong>button dropdown</strong> component.</small></label>
                    <input type="datetime" class="form-control" id="form-datetime" name="form-datetime" placeholder="02-16-2012" value="02-16-2012">
                </div>
                <!-- end DATEPICKER -->

                <div class="form-group">
                    <label for="form-textarea">Textarea:</label>
                    <textarea class="form-control" id="form-textarea" name="form-textarea" rows="3"></textarea>
                </div>

                <div class="checkbox">
                    <label>
                        <input id="form-checkbox" name="form-checkbox" type="checkbox"> Type checkbox
                    </label>
                </div>

                <button type="submit" class="btn-3d">Submit</button>
            </form>
            <!-- end FORMS -->

            <!-- BUTTONS -->
            <br>
            <br>
            <h3 id="spy-buttons">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Buttons:
            </h3>

            <p class="text-indent">En xstrap, los botones pueden ser elementos <code>&lt;a&gt;</code>, <code>input[type="button"]</code> y <code>&lt;button&gt;</code>.</p>

            <p>Para dar apariencia de botón a un elemento, solo tenemos que añadirle la clase <mark>.btn</mark> (por defecto, los elementos <code>button</code> se les aplica los estilos de <mark>.btn</mark>).</p>

            <p>
                <a class="btn" href="">Link con apariencia de botón (tiene clase .btn)</a>
                <br><br>
                <button>Button con apariencia de botón (por defecto)</button>
                <br><br>
                <input type="button" value="Input con apariencia de botón (por defecto)">
            </p>
            <!-- end BUTTONS -->

            <!-- IMAGES -->
            <br>
            <h3 id="spy-images">
                <span class="icomoon-cogs icomoon"></span>
                &nbsp;|&nbsp;
                Images:
            </h3>

            <h4>Default image:</h4>

            <img src="http://lorempixel.com/400/200/">

            <br>
            <br>
            <h4>Rounded image:</h4>

            <img class="img-rounded" src="http://lorempixel.com/400/200/">

            <br>
            <br>
            <h4>Responsive image:</h4>

            <img class="img-responsive" src="http://lorempixel.com/400/200/">

            <br>
            <h4>Responsive max:</h4>

            <img class="img-responsive-max img-responsive" src="http://lorempixel.com/400/200/">

            <br>
            <h4>Responsive center:</h4>

            <img class="img-responsive-center img-responsive" src="http://lorempixel.com/400/200/">

            <br>
            <p>
                Con Lorem Pixel, se pueden generar imágenes aleatorias para maquetar en fase de desarrollo.
                <br>
                <code>&lt;img src="http://lorempixel.com/400/200/"&gt;</code>
                <br>
                <a class="blank" href="http://lorempixel.com" target="_blank">Lorem Pixel</a>
            </p>
            <!-- end IMAGES -->

            <!-- POPOVER CONFIRMATION -->
            <button data-toggle="confirmation">CONFIRMATION</button>
            <!-- end POPOVER CONFIRMATION -->
        </div>
    </div>
</div>
</div>

<footer id="footer" class="footer">
    <p>
        <span>qqqq</span>
        |
        <a href=""><span>Open Ximdex Evolution &copy;</span></a>
        |
        <span>All rights reserved</span>
    </p>

    <a class="btn-3d-2 btn">BTN 3D 2</a>
</footer>

<?php //include_once ('modal-default.php'); ?>

<!-- jquery [v < 2] -->
<script src="./xstrap/js/jquery.js"></script>

<!-- COMPONENTS -->
<!-- dropdowns -->
<script src="./xstrap/components/dropdowns/js/dropdown.js"></script>
<!-- scrollspy -->
<script src="./xstrap/components/scrollspy/js/scrollspy.js"></script>
<!-- affix -->
<script src="./xstrap/components/affix/js/affix.js"></script>
<!-- tooltip -->
<script src="./xstrap/components/tooltips/js/tooltip.js"></script>
<!-- popover -->
<script src="./xstrap/components/popovers/js/popover.js"></script>
<!-- forms -->
<script src="./xstrap/components/forms/js/forms.js"></script>
<!-- forms -->
<script src="./xstrap/components/datepicker/js/datepicker.js"></script>

<!-- main -->
<script src="./xstrap/js/main.js"></script>
</body>
</html>
<xstrap-button>
	<button
		type="{type}"
		class="{class}"
		style="
			position: 	{position};
			top: 		{top};

			min-height: 35px;
			padding: 0px 10px;

			color:                  {color};
			color-hover:            {colorhover};
		">
			{text}
			<!-- <xstrap-icomoon icon="{icon}" size="{iconsize}" color="{iconcolor}"></xstrap-icomoon> -->
	</button>

	<script>
		var self = this;

		self.class = self.opts.class;

		self.type 		= self.opts.type;
		self.text 		= self.opts.text;

		self.position 	= self.opts.position;
		self.top 		= self.opts.top;
		self.right 		= self.opts.right;
		self.left 		= self.opts.left;

		self.color 			= self.opts.color;
		self.colorHover 	= self.opts.colorHover;
		self.bgcolor 		= self.opts.bgcolor;
		self.bgcolorHover 	= self.opts.bgcolorHover;

		self.border 		= self.opts.border;
		self.borderradius 	= self.opts.borderradius;

		// XSTRAP ICOMOON
		// icomoon
		self.icon 		= self.opts.icon;
		self.iconsize 	= self.opts.iconsize;
		self.iconcolor 	= self.opts.iconcolor;
	</script>

	<style type="text/less" scoped>
		/* CONSTANST */
		@min-height: 35px;
		@padding: 0px 10px;

		/* button */
		@color:                  #FFF;
		@color-hover:            #FFF;
		@background-color:       #d9534f;
		@background-color-hover: #E60026;

		/* text */
		@font-family:    'Ubuntu', sans-serif;
		@font-size:      12px;
		@font-weight:    400;
		@font-style:     normal;
		@text-align:     center;
		@text-transform: uppercase;
		@letter-spacing: auto;
		@line-height:    @min-height;
		@letter-spacing: auto;

		/* border */
		@border:        0px;
		@border-radius: 2px;

		/* shadow */
		@shadow-color:  	transparent;
		@shadow-width:  	0px;
		@shadow-height:  	0px;
		@shadow-radius:  	0px;
		@shadow-size:  		0px;

		/* shadow hover */
		@shadow-color-hover:  	transparent;
		@shadow-width-hover:  	0px;
		@shadow-height-hover:  	0px;
		@shadow-radius-hover:  	0px;
		@shadow-size-hover:  	0px;

		/* time */
		@time: 0s;

		/* MIXINS */
		/* button */
		.button (
    		@color:                   @color,
    		@color-hover:             @color-hover,
    		@background-color:        @background-color,
    		@background-color-hover:  @background-color-hover
  		){
  			color:              @color;
  			background-color:   @background-color;

  			&:hover,
  			&.active {
  			  color:            @color-hover;
  			  background-color: @background-color-hover;
  			}

  			&::before,
  			&::after {
  			  border-color: @color;
  			}
		}

		/* text */
		.text (
			@font-family: 		@font-family,
			@font-size: 		@font-size,
			@font-weight: 		@font-weight,
			@font-style: 		@font-style,
			@color: 			@color,
			@text-align: 		@text-align,
			@text-transform: 	@text-transform,
			@line-height: 		@line-height
		){

			font-family: 	@font-family;
			font-size: 		@font-size;
			font-weight: 	@font-weight;
			font-style: 	@font-style;
			color: 			@color;
			text-align: 	@text-align;
			text-transform: @text-transform;
			line-height: 	@line-height;
		}

		/* border */
		.border (
			@border: 	0px,
			@radio: 	@border-radius
		){

			border: 				@border;
			border-radius: 			@radio;
			-moz-border-radius: 	@radio;
		    -webkit-border-radius: 	@radio;
		}

		/* box-shadow */
		.box-shadow (
			@shadow-color: 		@shadow-color,
			@shadow-width:		0px,
			@shadow-height: 	0px,
			@shadow-radius:		0px,
			@shadow-size:		0px
		){

			-webkit-box-shadow: @shadow-width @shadow-height @shadow-radius @shadow-size @shadow-color;
			-moz-box-shadow: @shadow-width @shadow-height @shadow-radius @shadow-size @shadow-color;
			box-shadow: @shadow-width @shadow-height @shadow-radius @shadow-size @shadow-color;
		}

		/* transition */
		.transition (
    		@time: @time,
    		@direction: all
  		){

		  	-webkit-transition: @direction @time;
		  	-moz-transition:    @direction @time;
		  	-ms-transition:     @direction @time;
		  	-o-transition:      @direction @time;
		  	transition:         @direction @time;
		}

		/* user select */
		.user-select (
			@select
		){
  			-webkit-user-select: @select;
  			   -moz-user-select: @select;
  			    -ms-user-select: @select;
  			        user-select: @select;
		}

		/* not-outline */
		.not-outline () {
			outline: 			0;
			outline: 			none;
			outline-offset: 	0px;
		}

		/* tab focus */
		.tab-focus () {
		  	outline: thin dotted;
		  	outline: 5px auto -webkit-focus-ring-color;
		  	outline-offset: -2px;
		}

		/* LESS */
		button,
		input[type="button"],
		.btn {
  			.button ();
  			.text (@font-family, @font-size, @font-weight, @font-style, @color, @text-align, @text-transform, @line-height);
  			.border       (@border, @border-radius);
  			.box-shadow   (@shadow-color, @shadow-width, @shadow-height, @shadow-radius, @shadow-size);
  			.transition   (@time);
  			.user-select  (none);
  			.not-outline  ();

  			display: inline-block;
  			height: @min-height;
  			margin-bottom: 0; /* For input.btn*/
  			padding: @padding;

  			overflow:         hidden;
  			text-decoration:  none;
  			letter-spacing:   @letter-spacing;
  			cursor:           pointer;
  			white-space:      nowrap;
  			vertical-align:   middle;
  			touch-action:     manipulation;
  			background-image: none; /* Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214 */

  			&,
  			&:active,
  			&.active {
  			 	&:focus {
  			 		.tab-focus();
  			  	}
  			}

  			&:hover,
  			&:focus,
  			&.active,
  			&:active {
    			.box-shadow (@shadow-color-hover, @shadow-width-hover, @shadow-height-hover, @shadow-radius-hover, @shadow-size-hover);
    			outline: 0;
    			text-decoration: none;
    			background-image: none;
  			}

  			&::before,
  			&::after {
  			 	display: inline-block;
  			 	vertical-align: middle;
  			}
		}
	</style>
</xstrap-button>
<xstrap-button>
	<button
		type="{type}"
		style="
			position: 	{position};
			top: 		{top};

			border: 		{border};
			border-radius: 	{borderradius};
		">
			<!-- <xstrap-text></xstrap-text> -->
			{text}
			<!-- <xstrap-icomoon icon="{icon}" size="{iconsize}" color="{iconcolor}"></xstrap-icomoon> -->
	</button>

	<script>
		var self = this;

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

		// CORE????
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

		@color:                  #FFF;
		@color-hover:            #FFF;
		@background-color:       #d9534f;
		@background-color-hover: #E60026;

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

		/* user select */
		.user-select (
			@select
		){
  			-webkit-user-select: @select;
  			   -moz-user-select: @select;
  			    -ms-user-select: @select;
  			        user-select: @select;
		}

		/* LESS */
		button,
		input[type="button"],
		.btn {
  			.button ();
  			/*.border       (0px, 0px);*/
  			.user-select  (none);

  			display: inline-block;
  			height: @min-height;
  			margin-bottom: 0; /* For input.btn */
  			padding: @padding;

  			overflow:         hidden;
  			text-decoration:  none;
  			/* letter-spacing:   auto; */
  			cursor:           pointer;
  			white-space:      nowrap;
  			vertical-align:   middle;
  			touch-action:     manipulation;
  			background-image: none; /* Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214 */

  			&:hover,
  			&:focus,
  			&.active,
  			&:active {
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
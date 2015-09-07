<xstrap-button>
	<button
		type="{type}"
		style="
        	position: 			{position};
        	top: 				{top};
        	right: 				{right};
        	left:				{left}
			color: 				{color};
			background-color: 	{bgcolor};">
		{text}
	</button>

	<script>
		var self = this;

		self.store 		= searchStore;
		self.type 		= self.opts.type;
		self.text 		= self.opts.text;

		self.position 	= self.opts.position;
		self.top 		= self.opts.top;
		self.right 		= self.opts.right;
		self.left 		= self.opts.left;

		self.color 		= self.opts.color;
		self.bgcolor 	= self.opts.bgcolor;
	</script>

	<style scoped>
		button,
		input[type="button"],
		.btn {
  			background-color: #d9534f;
  			font-family: 'Ubuntu', sans-serif;
  			font-size: 12px;
  			font-weight: 400;
  			font-style: normal;
  			color: #ffffff;
  			text-align: center;
  			text-transform: uppercase;
  			line-height: 35px;
  			border: 0px;
  			border-radius: 2px;
  			-moz-border-radius: 2px;
  			-webkit-border-radius: 2px;
  			-webkit-box-shadow: 0px 0px 0px 0px transparent;
  			-moz-box-shadow: 0px 0px 0px 0px transparent;
  			box-shadow: 0px 0px 0px 0px transparent;
  			-webkit-transition: all 0s;
  			-moz-transition: all 0s;
  			-ms-transition: all 0s;
  			-o-transition: all 0s;
  			transition: all 0s;
  			-webkit-user-select: none;
  			-moz-user-select: none;
  			-ms-user-select: none;
  			user-select: none;
  			outline: 0;
  			outline: none;
  			outline-offset: 0px;
  			display: inline-block;
  			height: 35px;
  			margin-bottom: 0;
  			padding: 0px 10px;
  			overflow: hidden;
  			text-decoration: none;
  			letter-spacing: auto;
  			cursor: pointer;
  			white-space: nowrap;
  			vertical-align: middle;
  			touch-action: manipulation;
  			background-image: none;
		}

		button:hover,
		input[type="button"]:hover,
		.btn:hover,
		button.active,
		input[type="button"].active,
		.btn.active {
		 	color: #ffffff;
		 	background-color: #e60026;
		}

		button::before,
		input[type="button"]::before,
		.btn::before,
		button::after,
		input[type="button"]::after,
		.btn::after {
		 	border-color: #ffffff;
		}

		button small,
		input[type="button"] small,
		.btn small {
		 	font-size: 70%;
		}

		button:focus,
		input[type="button"]:focus,
		.btn:focus,
		button:active:focus,
		input[type="button"]:active:focus,
		.btn:active:focus,
		button.active:focus,
		input[type="button"].active:focus,
		.btn.active:focus {
		 	outline: thin dotted;
		 	outline: 5px auto -webkit-focus-ring-color;
		 	outline-offset: -2px;
		}

		button:hover,
		input[type="button"]:hover,
		.btn:hover,
		button:focus,
		input[type="button"]:focus,
		.btn:focus,
		button.active,
		input[type="button"].active,
		.btn.active,
		button:active,
		input[type="button"]:active,
		.btn:active {
		 	-webkit-box-shadow: 0px 0px 0px 0px transparent;
		 	-moz-box-shadow: 0px 0px 0px 0px transparent;
		 	box-shadow: 0px 0px 0px 0px transparent;
		 	outline: 0;
		 	text-decoration: none;
		 	background-image: none;
		}

		button::before,
		input[type="button"]::before,
		.btn::before,
		button::after,
		input[type="button"]::after,
		.btn::after {
		 	display: inline-block;
		 	vertical-align: middle;
		}
	</style>
</xstrap-button>
<xstrap-button>
	<button
		type="{type}"
		class="{css}">
			<yield/>
	</button>

	<script>
		var self = this;

		self.type 	= self.opts.type;
		self.css 	= self.opts.css;
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-button>
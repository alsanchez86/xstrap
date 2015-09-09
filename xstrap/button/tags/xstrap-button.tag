<xstrap-button>
	<button
		type="{type}"
		class="{addclass}">
			<yield/>
	</button>

	<script>
		var self = this;

		// opts
		self.type 		= self.opts.type;
		self.addclass 	= self.opts.addclass;
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-button>
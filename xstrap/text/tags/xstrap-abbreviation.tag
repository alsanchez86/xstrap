<xstrap-abbreviation>
	<abbr
		title="{title}"
		class="{addclass}">
			<yield/>
	</abbr>

	<script>
		var self = this;

		// opts
		self.title 		= self.opts.title;
		self.addclass 	= self.opts.addclass;

		// mirar la posibilidad de lanzar un tooltio cuando se hace hover
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-abbreviation>
<xstrap-row>
	<div class="
		row
		{addclass}">
			<yield/>
	</div>

	<script>
		var self = this;

		// opts
		self.addclass = self.opts.addclass;

		self.on ('mount', function () {
			// comprobamos que el hijo directo del row es un xstrap-col
		});
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-row>
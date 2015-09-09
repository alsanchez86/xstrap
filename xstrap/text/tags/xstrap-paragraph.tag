<xstrap-paragraph>
	<p
		class="{addclass}">
			<yield/>
	</p>

	<script>
		var self = this;

		// opts
		self.addclass = self.opts.addclass;

		self.on ('mount', function () {
			// comprobar que dentro no hay ningun otro parrafo
		});
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-paragraph>
<xstrap-container>
	<div class="
		container{type}
		{addclass}">
			<yield/>
	</div>

	<script>
		var self 	= this;
		var types 	= ['fluid'];

		// opts
		self.type 		= types.indexOf(self.opts.type) != -1 ? '-' + self.opts.type : '';
		self.addclass 	= self.opts.addclass;

		self.on ('mount', function () {
			// comprobamos que dentro del container no hay ningun otro container
		});
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-container>
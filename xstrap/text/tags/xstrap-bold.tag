<xstrap-bold>
	<b if="{type == 'bold'}"><yield/></b>
	<strong if="{type == 'strong'}"><yield/></strong>

	<script>
		var self = this;

		// opts
		self.addclass 	= self.opts.addclass;
		self.type 		= self.opts.type == 'strong' || self.opts.type == 'bold' ? self.opts.type : 'strong';
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-bold>
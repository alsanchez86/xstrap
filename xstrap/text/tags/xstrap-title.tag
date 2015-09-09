<xstrap-title>
	<h1 if="{type == 1}" class="{addclass}"><yield/></h1>
	<h2 if="{type == 2}" class="{addclass}"><yield/></h2>
	<h3 if="{type == 3}" class="{addclass}"><yield/></h3>
	<h4 if="{type == 4}" class="{addclass}"><yield/></h4>
	<h5 if="{type == 5}" class="{addclass}"><yield/></h5>

	<script>
		var self = this;

		// opts
		self.addclass 	= self.opts.addclass;
		self.type 		= self.opts.type;
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-title>
<xstrap-link>
	<a
		href="{href}"
		target="{target}"
		class="{addclass}">
			<yield/>
	</a>

	<script>
		var self = this;

		// opts
		self.addclass 	= self.opts.addclass;
		self.href 		= self.opts.href ? self.opts.href : '#';
		self.target 	= self.opts.target == 'blank' || self.opts.target == '_blank' ? '_blank' : '_self';

		self.on ('mount', function () {
			// comprobar que dentro del enlace no hay ningún otro enlace8
		});
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-link>
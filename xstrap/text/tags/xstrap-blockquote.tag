<xstrap-blockquote>
	<blockquote
		class="{addclass}">
			<yield/>

			<footer>
    			{footer}
			</footer>
	</blockquote>

	<script>
		var self = this;

		// opts
		self.addclass 	= self.opts.addclass;
		self.footer 	= self.opts.footer;
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-blockquote>
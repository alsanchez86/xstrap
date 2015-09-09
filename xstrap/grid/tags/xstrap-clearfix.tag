<xstrap-clearfix>
	<div class="
		clearfix
		{xs}
		{sm}
		{md}
		{lg}">
	</div>

	<script>
		var self = this;

		self.xs = self.opts.xs == "true" ? 'visible-xs-block' : '';
		self.sm = self.opts.sm == "true" ? 'visible-sm-block' : '';
		self.md = self.opts.md == "true" ? 'visible-md-block' : '';
		self.lg = self.opts.lg == "true" ? 'visible-lg-block' : '';
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-clearfix>
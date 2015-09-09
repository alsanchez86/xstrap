<xstrap-col>
	<div class="
		{xs} {xsoffset} {xspull} {xspush}
		{sm} {smoffset} {smpull} {smpush}
		{md} {mdoffset} {mdpull} {mdpush}
		{lg} {lgoffset} {lgpull} {lgpush}
		{addclass}">
			<yield/>
	</div>

	<script>
		var self = this;
		var cols = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

		// cols
		self.xs = cols.indexOf(self.opts.xs) != -1 ? 'col-xs-' + self.opts.xs : '';
		self.sm = cols.indexOf(self.opts.sm) != -1 ? 'col-sm-' + self.opts.sm : '';
		self.md = cols.indexOf(self.opts.md) != -1 ? 'col-md-' + self.opts.md : '';
		self.lg = cols.indexOf(self.opts.lg) != -1 ? 'col-lg-' + self.opts.lg : '';

		// offsets
		self.xsoffset = cols.indexOf(self.opts.xsoffset) != -1 ? 'col-xs-offset-' + self.opts.xsoffset : '';
		self.smoffset = cols.indexOf(self.opts.smoffset) != -1 ? 'col-sm-offset-' + self.opts.smoffset : '';
		self.mdoffset = cols.indexOf(self.opts.mdoffset) != -1 ? 'col-md-offset-' + self.opts.mdoffset : '';
		self.lgoffset = cols.indexOf(self.opts.lgoffset) != -1 ? 'col-lg-offset-' + self.opts.lgoffset : '';

		// pull
		self.xspull = cols.indexOf(self.opts.xspull) != -1 ? 'col-xs-pull-' + self.opts.xspull : '';
		self.smpull = cols.indexOf(self.opts.smpull) != -1 ? 'col-sm-pull-' + self.opts.smpull : '';
		self.mdpull = cols.indexOf(self.opts.mdpull) != -1 ? 'col-md-pull-' + self.opts.mdpull : '';
		self.lgpull = cols.indexOf(self.opts.lgpull) != -1 ? 'col-lg-pull-' + self.opts.lgpull : '';

		// push
		self.xspush = cols.indexOf(self.opts.xspush) != -1 ? 'col-xs-push-' + self.opts.xspush : '';
		self.smpush = cols.indexOf(self.opts.smpush) != -1 ? 'col-sm-push-' + self.opts.smpush : '';
		self.mdpush = cols.indexOf(self.opts.mdpush) != -1 ? 'col-md-push-' + self.opts.mdpush : '';
		self.lgpush = cols.indexOf(self.opts.lgpush) != -1 ? 'col-lg-push-' + self.opts.lgpush : '';

		// opts
		self.addclass 	= self.opts.addclass;
	</script>

	<style type="text/less" scoped>
	</style>
</xstrap-col>
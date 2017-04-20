<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	</div>
	</div>
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="pull-left copyright">Copyright &copy; <?php _e(date('Y'));?>&nbsp;<?php $this->options->title(); ?></div>
				<ul class="footer-nav pull-right">
					<li>Powered by <a href="http://typecho.org/" rel="nofollow">Typecho)))</a></li>
					<li>Optimized by <a href="http://hanc.cc">HanSon</a></li>

					<?php if($this->options->miibeian) : ?>
					<li><a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->miibeian; ?></a></li>
					<?php endif; ?>

					<?php if ( !empty($this->options->misc) && in_array('ShowLoadTime', $this->options->misc) ) : ?>
					<li>加载耗时：<?php echo timer_stop(); ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>

	<?php $this->footer(); ?>

	<script src="<?php $this->options->themeUrl('js/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
	<script>
	$.material.init();
	$.scrollUp({
	scrollImg: true,
	scrollText: "回顶部"
	});
	$('#scrollUp').addClass('btn btn-info btn-fab btn-raised mdi-navigation-expand-less');
	</script>	
</body>
</html>

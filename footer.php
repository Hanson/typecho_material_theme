
	<!--
	<script src="//cdn.bootcss.com/bootstrap-material-design/0.3.0/js/material.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
	-->
	</div>
	</div>
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="pull-left copyright">Copyright &copy; 2015&nbsp;<?php $this->options->title(); ?></div>
				<ul class="footer-nav pull-right">
					<li>Powered by <a href="http://typecho.org/" rel="nofollow">Typecho)))</a></li>
					<li>Optimized by <a href="http://hanc.cc">HanSon</a></li>

					<?php if($this->options->miibeian) : ?>
					<li><a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->miibeian; ?></a></li>
					<?php endif; ?>

					<?php if ( !empty($this->options->misc) && in_array('ShowLoadTime', $this->options->misc) ) : ?>
					<li>加载耗时：<?php echo timer_stop(), ' s'; ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>

	<script src="<?php $this->options->themeUrl('js/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
	<script>
      $.material.init();
    </script>
	</body>
</html>

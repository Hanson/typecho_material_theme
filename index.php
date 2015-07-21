<?php

/**
 * 这是HanSon 基于material 的Typecho模板
 *
 * @package Material Theme
 * @author HanSon
 * @version 1.0.0
 * @link http://hanc.cc
 */

$this->need('header.php');
?>
<section class="billboard">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="intro animate fadeIn">
					<h1><?php $this->options->slogan() ?></h1>
					<p class="lead"></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">

		<div class="col-md-9">
		    <?php while($this->next()): ?>
		    <div class="panel panel-default">
			    <div class="panel-body">
			        <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
			        <div class="post-meta">
			        	<span>作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
			        	<span>时间：<?php $this->date('F j, Y'); ?> | </span>
			        	<span>分类：<?php $this->category(','); ?> | </span>
			        	<span>评论：<a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a> </span>
			        </div>
			        <div class="post-content"><?php $this->content('Continue Reading...'); ?></div>
			    </div>
		    </div>
		    <?php endwhile; ?>
		    <?php $this->pageNav('<< 上一页', '下一页 >>'); ?>
		</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>


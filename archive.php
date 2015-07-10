<?php $this->need('header.php'); ?>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-9">
            <div class="alert alert-success">您正在查看: <?php $this->archiveTitle(array(
                'category'  =>  _t(' %s 分类下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
                ), '', ''); ?></div>
            <?php if ($this->have()): ?>
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
                <?php else: ?>
                    <article class="block">
                        <h2 class="header"><?php _e('没有找到内容'); ?></h2>
                    </article>
                <?php endif; ?>

            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

        </div>
        <?php $this->need('sidebar.php'); ?>
        <?php $this->need('footer.php'); ?>

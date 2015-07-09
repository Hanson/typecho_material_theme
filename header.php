<!DOCTYPE HTML>
<html lang="zh-CN">
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    	<meta name="renderer" content="webkit">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <?php if ($this->options->siteIcon): ?>
        <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
        <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
        <?php endif; ?>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/material-fullpalette.min.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/material.min.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ripples.min.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/roboto.min.css'); ?>">
        <!--
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/bootstrap-material-design/0.3.0/css/material.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/bootstrap-material-design/0.3.0/css/ripples.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/bootstrap-material-design/0.3.0/css/roboto.min.css" rel="stylesheet">
        -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customs.css'); ?>">
	</head>

	<header>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
			  	<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				    	<span class="icon-bar"></span>
				      	<span class="icon-bar"></span>
				      	<span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
				    <ul class="nav navbar-nav">
				    	<?php $this->widget('Widget_Metas_Category_List')
				            ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
				      	<?php $this->widget('Widget_Contents_Page_List')
				      		->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				    	<?php if($this->user->hasLogin()): ?>
				    		<li><a href="<?php $this->options->logoutUrl(); ?>">Logout (<?php $this->user->screenName(); ?>)</a></li>
				    	<?php else: ?>
				      		<li><a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a></li>
				      	<?php endif; ?>
				    </ul>
			  	</div>
			</div>
		</div>
	</header>


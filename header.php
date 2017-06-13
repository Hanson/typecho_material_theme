<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
  <link href="https://dn-phphub.qbox.me/uploads/avatars/4486_1463849877.jpeg?imageView2/1/w/100/h/100" rel="shortcut icon">
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
  <?php $this->header(); ?>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/material.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ripples.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/roboto.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customs.css'); ?>">
</head>
<body>
  <header>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li<?php if($this->is('index')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <?php $this->options->title() ?></a></li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
              <?php if(count($category->children)):?>
                <li class="dropdown"><a href="<?php $category->permalink(); ?>" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category->name?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $category->permalink(); ?>"><?php echo $category->name ?></a></li>
                  <?php foreach($category->children as $k=>$v):?>
                  <li><a href="<?php echo $v['permalink'] ?>"><?php echo $v['name'] ?></a></li>
                  <?php endforeach; ?>
                </ul></li>
              <?php else:?>
                <?php if($category->levels == 0):?>
                  <li<?php if ($this->is('category', $category->slug)): ?> class="active"<?php endif; ?>><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
                <?php endif;?>
              <?php endif;?>
            <?php endwhile; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
              <li<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
            <li><a title="把这个链接拖到你的Chrome收藏夹工具栏中" href='javascript:(function(){function c(){var e=document.createElement("link");e.setAttribute("type","text/css");e.setAttribute("rel","stylesheet");e.setAttribute("href",f);e.setAttribute("class",l);document.body.appendChild(e)}function h(){var e=document.getElementsByClassName(l);for(var t=0;t<e.length;t++){document.body.removeChild(e[t])}}function p(){var e=document.createElement("div");e.setAttribute("class",a);document.body.appendChild(e);setTimeout(function(){document.body.removeChild(e)},100)}function d(e){return{height:e.offsetHeight,width:e.offsetWidth}}function v(i){var s=d(i);return s.height>e&amp;&amp;s.height<n&amp;&amp;s.width>t&amp;&amp;s.width<r}function m(e){var t=e;var n=0;while(!!t){n+=t.offsetTop;t=t.offsetParent}return n}function g(){var e=document.documentElement;if(!!window.innerWidth){return window.innerHeight}else if(e&amp;&amp;!isNaN(e.clientHeight)){return e.clientHeight}return 0}function y(){if(window.pageYOffset){return window.pageYOffset}return Math.max(document.documentElement.scrollTop,document.body.scrollTop)}function E(e){var t=m(e);return t>=w&amp;&amp;t<=b+w}function S(){var e=document.createElement("audio");e.setAttribute("class",l);e.src=i;e.loop=false;e.addEventListener("canplay",function(){setTimeout(function(){x(k)},500);setTimeout(function(){N();p();for(var e=0;e<O.length;e++){T(O[e])}},15500)},true);e.addEventListener("ended",function(){N();h()},true);e.innerHTML=" <p>If you are reading this, it is because your browser does not support the audio element. We recommend that you get a new browser.</p> <p>";document.body.appendChild(e);e.play()}function x(e){e.className+=" "+s+" "+o}function T(e){e.className+=" "+s+" "+u[Math.floor(Math.random()*u.length)]}function N(){var e=document.getElementsByClassName(s);var t=new RegExp("\\b"+s+"\\b");for(var n=0;n<e.length;){e[n].className=e[n].className.replace(t,"")}}var e=30;var t=30;var n=350;var r=350;var i="http://odvwe6q59.bkt.clouddn.com/harlem-shake.mp3";var s="mw-harlem_shake_me";var o="im_first";var u=["im_drunk","im_baked","im_trippin","im_blown"];var a="mw-strobe_light";var f="http://odvwe6q59.bkt.clouddn.com/harlem-shake-style.css";var l="mw_added_css";var b=g();var w=y();var C=document.getElementsByTagName("*");var k=null;for(var L=0;L<C.length;L++){var A=C[L];if(v(A)){if(E(A)){k=A;break}}}if(A===null){console.warn("Could not find a node of the right size. Please try a different page.");return}c();S();var O=[];for(var L=0;L<C.length;L++){var A=C[L];if(v(A)){O.push(A)}}})()'>Let's Party !</a></li>
          </ul>
          <?php if ( !empty($this->options->misc) && in_array('ShowLogin', $this->options->misc) ) : ?>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->user->hasLogin()): ?>
            <li><a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>">登出</a></li>
            <?php else: ?>
            <li><a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a></li>
            <?php endif; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>


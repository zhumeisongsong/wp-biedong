<!doctype html>
<html class="no-js" lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <meta name="format-detection" content="telephone=no; email=no"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="renderer" content="webkit">
  <title><?php bloginfo('name'); ?></title>

  <!--css-->
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/4.0.6/css/swiper.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/style.css">
  <!--favicons-->
  <link rel="icon" href="<?php bloginfo('template_url'); ?>//image/logo-icon.png">
</head>

<body>
<!--nav bar-->
<nav class="nav-animated">
  <div class="container no-padding">
    <!--logo-->
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="<?php bloginfo('name'); ?>"
           class="hidden-xs logo-big">
      <img src="<?php echo get_template_directory_uri(); ?>/image/logo-scroll.png" alt="<?php bloginfo('name'); ?>"
           class="logo-sm">
    </a>

    <a href="#" class="icon-search">
      <img src="<?php bloginfo('template_url'); ?>/image/icon-search.png" alt="search">
    </a>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false">
      <img src="<?php bloginfo('template_url'); ?>/image/icon-collapse.png" alt="collapse">
    </button>

    <!--right navbar collapse-->
    <div class="collapse navbar-collapse navbar-main-collapse navbar-right top-menu no-padding" id="navbar">
      <ul class="nav navbar-nav">

        <li id="index">
          <a href="<?php echo home_url(); ?>">
            <span class="active-text">品&nbsp;&nbsp;&nbsp;牌</span>
            <span class="normal-text">bread</span>
          </a>
        </li>
        <li id="pack">
          <a href="<?php echo home_url(); ?>/index.php/category/pack/">
            <span class="active-text">包&nbsp;&nbsp;&nbsp;装</span>
            <span class="normal-text">pack</span>
          </a>
        </li>
        <li id="sign">
          <a href="<?php echo home_url(); ?>/index.php/category/sign/">
            <span class="active-text">标&nbsp;&nbsp;&nbsp;志</span>
            <span class="normal-text">sign</span>
          </a>
        </li>
        <li id="inset">
          <a href="<?php echo home_url(); ?>/index.php/category/inset/">
            <span class="active-text">插&nbsp;&nbsp;&nbsp;画</span>
            <span class="normal-text">inset</span>
          </a>
        </li>
        <li id="about">
          <a href="<?php echo home_url(); ?>/index.php/about/">
            <span class="active-text">关&nbsp;&nbsp;&nbsp;于</span>
            <span class="normal-text">about</span>
          </a>
        </li>
        <li id="news">
          <a href="<?php echo home_url(); ?>/index.php//news/">
            <span class="active-text">动&nbsp;&nbsp;&nbsp;态</span>
            <span class="normal-text">news</span>
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<div class="modal search-hidden">
  <div class="wrapper">
    <button type="button" class="close">&times;</button>
    <input class="input" placeholder="KEYWORDS" data-search="<?php echo home_url(); ?>/?s=">
  </div>
</div>
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
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
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

        <li>
          <a href="<?php echo home_url(); ?>" id="index">
            <div class="active-text"><span>品</span><span>牌</span></div>
            <div class="normal-text">bread</div>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/category/pack/" id="pack">
            <div class="active-text"><span>包</span><span>装</span></div>
            <div class="normal-text">pack</div>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/category/sign/" id="sign">
            <div class="active-text"><span>标</span><span>志</span></div>
            <div class="normal-text">sign</div>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/category/inset/" id="inset">
            <div class="active-text"><span>插</span><span>画</span></div>
            <div class="normal-text">inset</div>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/about/" id="about">
            <div class="active-text"><span>关</span><span>于</span></div>
            <div class="normal-text">about</div>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/news/" id="news">
            <div class="active-text"><span>动</span><span>态</span></div>
            <div class="normal-text">news</div>
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
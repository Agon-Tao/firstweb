<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="generator" content="WordPress"/>
<title><?php if (function_exists('is_tag') && is_tag()) {
   single_tag_title('Tag Archive for "'); echo '" - ';
 } elseif (is_archive()) {
   wp_title(''); echo ' Archive - ';
 } elseif (is_search()) {
   echo 'Search for "'.wp_specialchars($s).'" - ';
 } elseif (!(is_404()) && (is_single()) || (is_page())) {
   wp_title(''); echo ' - ';
 } elseif (is_404()) {
   echo 'Not Found - ';
 }
if (is_home()) {
   bloginfo('name'); echo ' - '; bloginfo('description');
 } else {
   bloginfo('name');
}
   if ($paged > 1) {
   echo ' - page '. $paged;
 } ?>
</title>
<link rel="stylesheet" href="//at.alicdn.com/t/font_228781_etra1u0garl.css">
<link href="<?php echo get_bloginfo('stylesheet_directory');?>/styles.css" rel="stylesheet" />  
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common-tpl.js"></script>
</head>
<body class="headerFixed">
<!--[if lte IE 8]>
<div id="browsehappy">
    您正在使用的浏览器版本过低，请<a href="https://browsehappy.com/" target="_blank">
    <strong>升级您的浏览器</strong></a>，获得最佳的浏览体验！
</div>
<![endif]-->

<script language="javascript" src="<?php bloginfo('template_url'); ?>/js/em_runcode.js" /></script><link rel="stylesheet" type="text/css" href ="<?php bloginfo('template_url'); ?>/css/em_runcode.css" />
<!--搜索栏-->
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search" id="search-form">
    <input type="search" name="s" class="search-input" value="" placeholder="请输入关键字，按Enter搜索" id="s" required/>
</form>
<!--搜索栏 /-->

<!--导航-->
<div class="nav" id="nav">
    <div class="container">
        <a href="javascript:;" class="icon-menu" id="open-menu">
            <i class="icon-menu-item"></i>
            <i class="icon-menu-item"></i>
            <i class="icon-menu-item"></i>
        </a>
        <a href="/" class="logo"><img height="50px" src="<?php echo get_option('ashu_copy_rightlogo'); ?>" alt="">
		<?php echo get_option('ashu_copy_righttitle'); ?></a>
            <ul class="menu" id="menu">
<a> <?php 
wp_nav_menu( 
array( 
 'theme_location' => 'nav',
 'container'=>'<li>',
 'menu_id'=>'menu',
 'menu_class'=>'item',
 'link_before' => '<span>',
 'link_after' => '</span>',
 
 )); ?></a>
				   
				   </li>

            </ul>
            </div>
</div>
<!--导航 /-->
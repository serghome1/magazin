<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package magazin
 */
?><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?>  <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap-theme.css" />
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/sigistyle.css">


<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/style-ie.css"/>
<![endif]--> 

<link rel="shortcut icon" href="<?=get_template_directory_uri()?>img/favicon.ico">

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?=get_template_directory_uri()?>/js/bootstrap.js"></script>
<script src="<?=get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script src="<?=get_template_directory_uri()?>/js/my.js"></script>
<script src="<?=get_template_directory_uri()?>/js/npm.js"></script>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
   
   
  </head>
  <body>
  <div class="container-fluid">
 <!---->
  <div class="masthead">
      <!-- Шапка -->
       <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="index.html">Главная</a></li>
            <li><a href="sigi.html">Электронные сигареты</a></li>
            <li><a href="gigi.html">Жидкости</a></li>
            <li><a href="yourself.html">Сделай сам</a></li>
            <li><a href="sale.html">Оплата и доставка</a></li>
            <li><a href="forum.html">Форум</a></li>
          </ul>
        </nav>
       <!-- Инфо шапки -->
    <div class="header-info">
      <div class="row">
       <!-- Логотип -->
        <div class="col-lg-4"><div class="brend"><a href="index.html"><h1>iSiga</h1></a></div></div>
           <!-- Номера телефонов -->
            <div class="col-lg-4"><ul class="kontakt"><li>Телефоны для справки:</li>
            <li><img src="<?=get_template_directory_uri()?>/images/kiev.jpg">096-123-45-67</li>
            <li><img src="<?=get_template_directory_uri()?>/images/mts.jpg">099-123-45-67</li>
            <li><img src="<?=get_template_directory_uri()?>/images/life.jpg">093-123-45-67</li></ul></div>
            <!-- Форма -->
            <div class="col-lg-4"><form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
  </div><br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div><br><br>
  <div class="checkbox">
    <label>
      <input type="checkbox">запомнить меня
    </label>
  </div>
  <button type="submit" class="btn btn-default">Вход</button>
                </form><div class="reg"><a href="#">Регистрация</a></div></div>
        </div> </div>
      
      </div>
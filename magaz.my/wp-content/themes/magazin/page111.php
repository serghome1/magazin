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
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/style.css">
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

         <li class="active"><a href="http://magaz.my/">Главная</a></li>
            <li><a href="http://magaz.my/%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5-%D1%81%D0%B8%D0%B3%D0%B0%D1%80%D0%B5%D1%82%D1%8B/">Электронные сигареты</a></li>
            <li><a href="http://magaz.my/%D0%B6%D0%B8%D0%B4%D0%BA%D0%BE%D1%81%D1%82%D0%B8/">Жидкости</a></li>
            <li><a href="http://magaz.my/%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D0%B9-%D1%81%D0%B0%D0%BC/">Сделай сам</a></li>
            <li><a href="http://magaz.my/%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B0-%D0%B8-%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0/">Оплата и доставка</a></li>
            <li><a href="http://magaz.my/%D1%84%D0%BE%D1%80%D1%83%D0%BC/">Форум</a></li> 
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

	  
	  <?php the_content(); ?>
<!-- Карусель -->

<div class="examplecarusel">
<div id="myCarousel2" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Слайды карусели -->
  <div class="carousel-inner">
    <!-- 1 слайд -->
    <div class="active item">
     <img src="<?=get_template_directory_uri()?>/images/abrikozen.jpg">
      <h2></h2>
      <div class="carousel-caption">
       <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Абрикос</b></p>
      </div>
    </div>
    <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/Vishnja.jpg">
      <h2>Слайд №2</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Вишня</b></p>
      </div>
    </div>
    <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/apelsin.jpg">
      <h2>Слайд №3</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Описание 3 слайда...</p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/cpineapple.jpg">
      <h2>Слайд №4</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Ананас</b></p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/cgrapes.jpg">
      <h2>Слайд №5</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Виноград</b></p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/cbanana.jpg">
      <h2>Слайд №6</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Банан</b></p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/ccoffee.jpg">
      <h2>Слайд №7</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Кофе</b><</p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/cberries.jpg">
      <h2>Слайд №8</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Лесные ягоды</b></p>
      </div>
    </div>
     <div class="item">
     <img src="<?=get_template_directory_uri()?>/images/carusel/ctropic.jpg">
      <h2>Слайд №9</h2>
      <div class="carousel-caption">
        <h3>iSiga</h3>
        <p>Жидкость для электронных сигарет <b>Тропик</b></p>
      </div>
    </div>
  </div>
    </div>
      </div>
    
     <!-- Контент -->
    
    <div class="content">
       <div class="row-fluid">
     
         <!-- Боковое меню -->
       
        <div class="col-lg-2">

		                <ul class="saitbar">
		<!--  <?php wp_nav_menu('primary'); ?> -->
               <li><a href="http://magaz.my">Главная</a></li><br>
                  <li><a href="http://magaz.my/?p=51">Электронные сигареты</a></li><br>
                  <li><a href="gigi.html">Жидкости</a></li><br>
                  <li><a href="yourself.html">Сделай сам</a></li><br>
                  <li><a href="sale.html">Оплата и доставка</a></li><br>
                  <li><a href="forum.html">Форум</a></li><br> 
               </ul> 
			   
        </div>
        
       

      
         <!-- Каталог -->
         <div class="col-lg-8">
         <div class="row-fluid">
          
           <!-- Первый столбец -->
            <div class="col-lg-4">
                <div class="orange"><img src="<?=get_template_directory_uri()?>/images/Catalog/orange.jpg"><h3>Жидкость для электронных сигарет <b>Апельсин</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="karta.html" role="button">Подробнее</a>
 </div>
               <div class="banana"><img src="<?=get_template_directory_uri()?>/images/Catalog/banana.jpg"><h3>Жидкость для электронных сигарет <b>Банан</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="karta.html" role="button">Подробнее</a></div>
                <div class="amaretto"><img src="<?=get_template_directory_uri()?>/images/Catalog/amaretto.jpg"><h3>Жидкость для электронных сигарет <b>Аамаретто</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="karta.html" role="button">Подробнее</a></div>
                <div class="berries"><img src="<?=get_template_directory_uri()?>/images/Catalog/berries.jpg"><h3>Жидкость для электронных сигарет <b>Лесные ягоды</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="karta.html" role="button">Подробнее</a></div>
                
                
            </div>
            
           <!-- Второй столбец -->
            <div class="col-lg-4">
                <div class="apricot"><img src="<?=get_template_directory_uri()?>/images/Catalog/apricot.jpg"><h3>Жидкость для электронных сигарет <b>Абрикос</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="cherry"><img src="<?=get_template_directory_uri()?>/images/Catalog/cherry.jpg"><h3>Жидкость для электронных сигарет <b>Вишня</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="coffe"><img src="<?=get_template_directory_uri()?>/images/Catalog/coffe.jpg"><h3>Жидкость для электронных сигарет <b>Кофе</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="tutti"><img src="<?=get_template_directory_uri()?>/images/Catalog/tutti.jpg"><h3>Жидкость для электронных сигарет <b>Тутти-фрутти</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                
            </div>
            
            <!-- Третий столбец -->
            <div class="col-lg-4">
                <div class="pineapple"><img src="<?=get_template_directory_uri()?>/images/Catalog/pineapple.jpeg"><h3>Жидкость для электронных сигарет <b>Ананас</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="grapes"><img src="<?=get_template_directory_uri()?>/images/Catalog/grapes.jpg"><h3>Жидкость для электронных сигарет <b>Виноград</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="estragon"><img src="<?=get_template_directory_uri()?>/images/Catalog/estragon.jpg"><h3>Жидкость для электронных сигарет <b>Тархун</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
                <div class="tropic"><img src="<?=get_template_directory_uri()?>/images/Catalog/tropic.jpg"><h3>Жидкость для электронных сигарет <b>Тропик</b></h3><p>30 грн</p><a  type="button" class="btn btn-success" href="#" role="button">Подробнее</a></div>
            </div>
            
             
             
         </div>
         </div>
         <!-- Блок информации -->
         <div class="col-lg-2">
            <!-- Корзина -->
             <div class="basket"><a href="#"> <img src="<?=get_template_directory_uri()?>/images/basket.png"><smal>Корзина</smal></a></div>
             
             <div class="info">
                 <div class="article1_1"><a href="blog.html"><h3>Статья 1</h3><p> какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p></a><br></div>
                 <div class="article1_2"><a href="blog.html"><h3>Статья 2</h3><p>какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p></a><br></div>
                 <div class="article1_3"><a href="blog.html"><h3>Статья 3</h3><p>какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p></a><br></div>
                 <div class="article1_4"><a href="blog.html"><h3>Статья 4</h3><p>какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p></a><br></div>
                 <div class="article1_5"><a href="blog.html"><h3>Статья 5</h3><p>какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p></a><br></div>
                 
                 
                 
                 
             </div>
         </div>
        
        
        </div>
</div>   
    
 
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=get_template_directory_uri()?>/js/bootstrap.min.js"></script>
     <script src="<?=get_template_directory_uri()?>/js/my.js"></script>
      
    <div class="footer">
        <div class="row">
            <div class="col-lg-4"><div class="brend-footer"><h1>iSiga</h1><h2>жидкости для электронных сигарет</h2></div><ul class="kontakt-footer">
            <li><img src="<?=get_template_directory_uri()?>/images/kiev.jpg">096-123-45-67</li>
            <li><img src="<?=get_template_directory_uri()?>/images/mts.jpg">099-123-45-67</li>
            <li><img src="<?=get_template_directory_uri()?>/images/life.jpg">093-123-45-67</li></ul></div>
            <div class="col-lg-4"><ul class="social">
                <li><a href="#"><img src="<?=get_template_directory_uri()?>/images/vk.jpg">iSiga вконтакте</a></li><br>
                <li><a href="#"><img src="<?=get_template_directory_uri()?>/images/twitter.jpg">iSiga в twitter</a></li><br>
                <li><a href="#"><img src="<?=get_template_directory_uri()?>/images/insta.jpg">iSiga в Instagram</a></li><br>
            </ul></div>
            
            <div class="col-lg-4"><img src="<?=get_template_directory_uri()?>/images/nosiga.jpg"></div>
        </div>
    </div>
     
      
   
      </div>
        
  </body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package magazin
 */
?>

	</div><!-- #content -->
	
	<meta charset="utf-8">
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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'magazin' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'magazin' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'magazin' ), 'magazin', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

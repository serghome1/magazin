<?php get_header(); ?>

<div class="grid_7">
    <div class="box_nobg">
<?php if (have_posts()) : ?>
<h4 class="search">Результаты поиска для &laquo;<?php echo $_GET['s']; ?>&raquo;</h4>

		<?php while (have_posts()) : the_post(); ?>
        
        <div class="post" id="post-<?php the_ID(); ?>">   
			        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Постояная ссылка: <?php the_title(); ?>"><?php the_title(); ?></a></h3>             
                    <div class="date"><?php the_time('d M Y'); ?></div>        
       				<div class="postcontent"><?php limits(100, '<span class="readmore">Читать полностью &raquo;</span>'); ?></div>
        			<div class="clear"></div><br />
        </div><!--post-->
        
<?php endwhile; else: ?>
<h4 class="search">Результаты поиска для &laquo;<?php echo $_GET['s']; ?>&raquo;</h4>
Ничего не найдено! Попробуйте снова.
<?php endif; ?>

    </div>
</div>

<?php include (TEMPLATEPATH . '/pagebar.php'); ?>

<?php include (TEMPLATEPATH . '/bottom.php'); ?>
<?php get_footer(); ?>


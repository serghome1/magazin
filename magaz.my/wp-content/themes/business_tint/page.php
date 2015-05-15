<?php get_header(); ?>
    <div id="content">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="post"  id="post-<?php the_ID(); ?>">
         <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h1>
          <?php the_title(); ?>
          </h1></a>
        
        <p>
          <?php the_content('Читать полностью &raquo;'); ?>
		   <?php link_pages('<p><strong>Страницы:</strong> ', '</p>', 'number'); ?>
		    <?php edit_post_link('Править', '<p>', '</p>'); ?>
        </p>
      </div>
      <?php endwhile; ?>
	  <?php else : ?>
        <h2 align="center">Не найдено</h2>
        <p align="center">К сожалению, по вашему запросу ничего не найдено.</p>
      <?php endif; ?>
    </div>
          <?php get_sidebar(); ?>  
 	<?php get_footer(); ?>   
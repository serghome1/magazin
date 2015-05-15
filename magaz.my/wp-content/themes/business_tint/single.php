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
        </p>
		<div class="links">Автор:
          <?php the_author() ?>
          &nbsp;&nbsp;&nbsp;<?php the_time('d M Y') ?>
          Рубрика:
          <?php the_category(', ') ?>
          &nbsp;&nbsp;&nbsp;
          <?php edit_post_link('Править','','&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
          <?php comments_popup_link('Ваш отзыв &raquo;', '1 отзыв &raquo;', 'Отзывов: % &raquo;'); ?>
           </div>
      </div>
	    <?php comments_template(); ?>
      <?php endwhile; ?>
	  <?php else : ?>
        <h2 align="center">Не найдено</h2>
        <p align="center">К сожалению, по вашему запросу ничего не найдено.</p>
      <?php endif; ?>
	  <p class="pagination">
          <?php next_posts_link('&laquo; Предыдущая страница') ?>
          <?php previous_posts_link('Следующая страница &raquo;') ?>
        </p>
    </div>
          <?php get_sidebar(); ?>  
 	<?php get_footer(); ?>   
<div id="sidebar">
	           <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<h2>Рубрики</h2>
		<ul>
         	 <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
            </ul>
		<h2>Новое на сайте</h2>
            <ul>
              <?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
            </ul>
		<h2>Архивы</h2>
            <ul>
       		   <?php wp_get_archives('type=monthly'); ?>
            </ul>
		 <h2>Ссылки</h2>
            <ul>
               <?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
            </ul>
<?php endif; ?>
    </div>
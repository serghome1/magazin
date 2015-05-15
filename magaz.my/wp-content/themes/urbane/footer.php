<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="grid_12">
    <div class="copyright">
        <div class="copyright_left"><?php echo $ub_footer; ?> |<?php if ( (is_home())&&!(is_paged()) ){ ?> <a href="http://blogstyle.ru/" title="Бесплатные темы WordPress">Тема WordPress</a><?php } ?> Urbane от <a href="http://www.blogohblog.com" title="Free WordPress Themes">Blog Oh! Blog</a>, источник: <a href="http://wordpress-template.ru" title="Шаблоны Wordpress">wordpress-template.ru</a></div>
        <div class="copyright_right"><a href="#top">Наверх &uarr;</a></div>
        <div class="clear"></div>
    </div>
</div>

<div class="clear"></div>
<br />

</div><!--wrapper-->
</div><!--container_12 -->

<?php wp_footer(); ?>
</body>
</html>
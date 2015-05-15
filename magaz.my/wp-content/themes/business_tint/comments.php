<div style="margin-left:10px; margin-right:10px">
<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Защищено паролем'); ?></h2>
<p><?php _e('Пожалуйста, введите пароль для просмотра комментариев.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('Отзывов нет', 'Один отзыв', 'Отзывов: %' );?> на &laquo;<?php the_title(); ?>&raquo;</h3>

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>

	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

<div class="commentmetadata">
<strong><?php comment_author_link() ?></strong>, <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d M Y') ?> <?php _e('at');?> <?php comment_time() ?></a> <?php _e('пишет&#58;'); ?> <?php edit_comment_link('Править','',''); ?>
 		<?php if ($comment->comment_approved == '0') : ?>
		<em><?php _e('Спасибо! Ваш комментарий ожидает проверки.'); ?></em>
 		<?php endif; ?>
</div>

<?php comment_text() ?>
	</li>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
	</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">К сожалению, отзывы закрыты.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

		<h3 id="respond">Ваш отзыв</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Вы должны <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">войти</a>, чтобы оставлять комментарии.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Выйти с этого аккаунта">Выйти &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" style="border:1px solid #000" />
<label for="author"><small>Имя <?php if ($req) echo "*"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2"  style="border:1px solid #000"/>
<label for="email"><small>Почта (скрыта) <?php if ($req) echo "*"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3"  style="border:1px solid #000"/>
<label for="url"><small>Сайт</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php _e('Вы можете использовать следующие теги&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"  style="border:1px solid #000"></textarea></p>
<br />

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Добавить" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

</p><br />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>
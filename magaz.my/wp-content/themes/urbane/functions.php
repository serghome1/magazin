<?php
function limits($max_char, $more_link_text = '(далее...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
	$content = strip_tags($content, '');

   if (strlen($_GET['p']) > 0) {
      echo $content;
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo $content;

        echo "...";
        echo "<div class=";
		echo "'rmore'>";
		echo "<a href='";
        the_permalink();
        echo "'>".$more_link_text."</a></div>";
   }
   else {
      echo $content;
   }
}

function imagesrc() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if (!($first_img))
{
	$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
if (is_array($attachments))
	{
	$count = count($attachments);
	$first_attachment = array_shift($attachments);
	$imgsrc = wp_get_attachment_image_src($first_attachment->ID, 'large');
	$first_img = $imgsrc[0];
	}
}
return $first_img;
}

function popular_posts($no_posts = 6, $before = '<li>', $after = '</li>', $show_pass_post = false, $duration='') {
    global $wpdb;
	$request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'comment_count' FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish'";
	if(!$show_pass_post) $request .= " AND post_password =''";

        if($duration !="") { $request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
}

	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
    $posts = $wpdb->get_results($request);
    $output = '';
	if ($posts) {
		foreach ($posts as $post) {
			$post_title = stripslashes($post->post_title);
			$comment_count = $post->comment_count;
			$permalink = get_permalink($post->ID);
			$output .= $before . '<a href="' . $permalink . '" title="' . $post_title.'">' . $post_title . '</a> <span class="commentnumber">(' . $comment_count.')</span>' . $after;
		}
	} else {
		$output .= $before . "Не найдено" . $after;
	}
    echo $output;
}

function shorten_text($title, $length) {
	
				if (strlen($title)>$length) 
					{$dots="...";} 
				else 
					{$dots="";}  
				$shorttext = strip_tags($title, '');
				$shorttext=substr($shorttext, 0, $length).$dots;
				return $shorttext;
}
?>
<?php
if (function_exists('register_sidebar'))
{
	register_sidebar(array('name' => 'Home - Sidebar left'));
	register_sidebar(array('name' => 'Home - Sidebar Right'));
	register_sidebar(array('name' => 'Bottom Section Left'));
	register_sidebar(array('name' => 'Bottom Section Middle'));
	register_sidebar(array('name' => 'Bottom Section Right'));
	register_sidebar(array('name' => 'Single/Page Sidebar'));
}
?>
<?php

$themename = "Urbane";
$shortname = "ub";
$options = array (

array(
"name" => "Настройки темы",
"type" => "title"),

array(
"type" => "open"),

array(
"name" => "Рубрика рекомендуемых статей",
"desc" => "Выберите рубрику, статьи из которой вы хотите выводить на главной в качестве рекомендуемых",
"id" => $shortname."_fcat",
"std" => "featured",
"type" => "text"),

array(
"name" => "Рубрика статей слева на главной",
"desc" => "Выберите рубрику, статьи из которой вы хотите выводить на главной слева",
"id" => $shortname."_lcat",
"std" => "featured",
"type" => "text"),

array(
"name" => "Рубрика статей посередине на главной",
"desc" => "Выберите рубрику, статьи из которой вы хотите выводить на главной посередине",
"id" => $shortname."_mcat",
"std" => "featured",
"type" => "text"),

array(
"name" => "Рубрика статей справа на главной",
"desc" => "Выберите рубрику, статьи из которой вы хотите выводить на главной справа",
"id" => $shortname."_rcat",
"std" => "featured",
"type" => "text"),

array(
"name" => "Имя ленты Feedburner (используется для секции 'Подписка на RSS')",
"desc" => "Введите имя ленты <a href=\"http://www.feedburner.com\">Feedburner</a>",
"id" => $shortname."_feedburner",
"std" => "blogohblog",
"type" => "text"),

array(
"name" => "ID Feedburner (используется для секции 'Подписка по E-mail')",
"desc" => "Вы можете найти ID ленты <a href=\"http://www.feedburner.com\">Feedburner</a> в своем аккаунте",
"id" => $shortname."_feed_id",
"std" => 950698,
"type" => "text"),

array(
"name" => "ID Twitter",
"desc" => "Введите свой ID <a href=\"http://www.twitter.com\">Twitter</a>",
"id" => $shortname."_twitter",
"std" => "blogohblog",
"type" => "text"),

array(
"name" => "Текст в подвале сайта",
"desc" => "Введите текст, который будет отображен в подвале сайта",
"id" => $shortname."_footer",
"std" => "Powered by <a href='http://www.wordpress.org'>WordPress</a>",
"type" => "textarea"),

array(
"type" => "close")

);

/*Add a Theme Options Page*/
function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {

        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сохранены.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сброшены.</strong></p></div>';

?>
<div class="wrap" style="margin:0 auto; padding:20px 0px 0px;">

<form method="post">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {

case "open":
?>
<div style="width:808px; background:#eee; border:1px solid #ddd; padding:20px; overflow:hidden; display: block; margin: 0px 0px 30px;">

<?php break;

case "close":
?>

</div>

<?php break;

case "misc":
?>
<div style="width:808px; background:#fffde2; border:1px solid #ddd; padding:20px; overflow:hidden; display: block; margin: 0px 0px 30px;">
	<?php echo $value['name']; ?>
</div>
<?php break;

case "title":
?>

<div style="width:810px; height:22px; background:#555; padding:9px 20px; overflow:hidden; margin:0px; font-family:Verdana, sans-serif; font-size:18px; font-weight:normal; color:#EEE;">
	<?php echo $value['name']; ?>
</div>

<?php break;

case 'text':
?>

<div style="width:808px; padding:0px 0px 10px; margin:0px 0px 10px; border-bottom:1px solid #ddd; overflow:hidden;">
	<span style="font-family:Arial, sans-serif; font-size:16px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['name']; ?>
	</span>
	<?php if ($value['image'] != "") {?>
		<div style="width:808px; padding:10px 0px; overflow:hidden;">
			<img style="padding:5px; background:#FFF; border:1px solid #ddd;" src="<?php bloginfo('template_url');?>/images/<?php echo $value['image'];?>" alt="image" />
		</div>
	<?php } ?>
	<input style="width:200px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" />
	<br/>
	<span style="font-family:Arial, sans-serif; font-size:11px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['desc']; ?>
	</span>
</div>

<?php
break;

case 'textarea':
?>

<div style="width:808px; padding:0px 0px 10px; margin:0px 0px 10px; border-bottom:1px solid #ddd; overflow:hidden;">
	<span style="font-family:Arial, sans-serif; font-size:16px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['name']; ?>
	</span>
	<?php if ($value['image'] != "") {?>
		<div style="width:808px; padding:10px 0px; overflow:hidden;">
			<img style="padding:5px; background:#FFF; border:1px solid #ddd;" src="<?php bloginfo('template_url');?>/images/<?php echo $value['image'];?>" alt="image" />
		</div>
	<?php } ?>
	<textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo stripslashes($value['std']); } ?></textarea>
	<br/>
	<span style="font-family:Arial, sans-serif; font-size:11px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['desc']; ?>
	</span>
</div>

<?php
break;
/*Ralph Damiano*/
case 'select':
?>

<div style="width:808px; padding:0px 0px 10px; margin:0px 0px 10px; border-bottom:1px solid #ddd; overflow:hidden;">
	<span style="font-family:Arial, sans-serif; font-size:16px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['name']; ?>
	</span>
	<?php if ($value['image'] != "") {?>
		<div style="width:808px; padding:10px 0px; overflow:hidden;">
			<img style="padding:5px; background:#FFF; border:1px solid #ddd;" src="<?php bloginfo('template_url');?>/images/<?php echo $value['image'];?>" alt="image" />
		</div>
	<?php } ?>
	<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select>
	<br/>
	<span style="font-family:Arial, sans-serif; font-size:11px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['desc']; ?>
	</span>
</div>

<?php
break;

case "checkbox":
?>

<div style="width:808px; padding:0px 0px 10px; margin:0px 0px 10px; border-bottom:1px solid #ddd; overflow:hidden;">
	<span style="font-family:Arial, sans-serif; font-size:16px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['name']; ?>
	</span>
	<?php if ($value['image'] != "") {?>
		<div style="width:808px; padding:10px 0px; overflow:hidden;">
			<img style="padding:5px; background:#FFF; border:1px solid #ddd;" src="<?php bloginfo('template_url');?>/images/<?php echo $value['image'];?>" alt="image" />
		</div>
	<?php } ?>
	<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
	<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<br/>
	<span style="font-family:Arial, sans-serif; font-size:11px; font-weight:bold; color:#444; display:block; padding:5px 0px;">
		<?php echo $value['desc']; ?>
	</span>
</div>


<?php
break;

case "submit":
?>

<p class="submit">
<input name="save" type="submit" value="Сохранить настройки" />
<input type="hidden" name="action" value="save" />
</p>

<?php break;
}
}
?>

<p class="submit">
<input name="save" type="submit" value="Сохранить настройки" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Сбросить" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}
function mytheme_wp_head() { ?>
<?php }
add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin'); ?>
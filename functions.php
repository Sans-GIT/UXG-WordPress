<?php
/**
 * UXGURUS functions and definitions
 *
 * @package UXGURUS
 */

define('TEMPLATEURL', get_template_directory_uri() );

if ( ! function_exists( 'uxg_setup' ) ) :
	function uxg_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', RED_DOMAIN )
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_theme_support( 'post-formats', array(
			'image',
			'video',
		));

		$defaults = array(
			'default-image'          => '',
			'header-text'            => false,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);

		add_theme_support( 'custom-header', $defaults );
		add_theme_support( 'post-thumbnails', array('post', 'page') );
		set_post_thumbnail_size( 200, 170, true ); // Sets the Post Main Thumbnails 
		add_image_size( 'delicious-recent-thumbnails', false ); // Sets Recent Posts Thumbnails 
	}
endif; // uxg_setup
add_action( 'after_setup_theme', 'uxg_setup' );
?>

<?php
function delicious_recent_posts() {
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts=5');
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
            <div class="uxgblogs__section">
				<a class="uxgblogs__link" href="<?php esc_url(the_permalink()); ?>" title="<?php esc_html(the_title()); ?>"></a>
				<?php the_post_thumbnail('delicious-recent-thumbnails'); ?>
				<h6 class="uxgblogs__title"><?php esc_html(the_title()); ?></h6>
				<?php esc_html(the_content()); ?>
				<p class="uxgblogs__authoredby">Written By</p>
				<p class="uxgblogs__authorname"><?php the_author(); ?></p>
			</div>
        <?php endwhile;
    wp_reset_postdata();
}
?>

<?php
function delicious_about_recent_posts() {
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts=5');
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
            <div class="uxgblogs__section">
				<a class="uxgblogs__link" href="<?php esc_url(the_permalink()); ?>" title="<?php esc_html(the_title()); ?>"></a>
				<?php the_post_thumbnail('delicious-recent-thumbnails'); ?>
				<?php 
					$postDate = get_the_date('Y');
				?>
				<h6 class="uxgblogs__title"><?php echo $postDate; ?></h6>
				<?php esc_html(the_content()); ?>
			</div>
        <?php endwhile;
    wp_reset_postdata();
}
?>

<?php
function get_recent_posts($category_id, $from_index_value, $to_index_value) {
	$del_recent_posts = new WP_Query();
	$del_recent_posts->query('showposts=9');
	while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
		<div class="uxgblogs__section">
			<a class="uxgblogs__link" href="<?php esc_url(the_permalink()); ?>" title="<?php esc_html(the_title()); ?>"></a>
			<?php the_post_thumbnail('delicious-recent-thumbnails'); ?>
			<h6 class="uxgblogs__title"><?php esc_html(the_title()); ?></h6>
			<?php esc_html(the_content()); ?>
			<p class="uxgblogs__authoredby">Written By</p>
			<p class="uxgblogs__authorname"><?php the_author(); ?></p>
			<?php $parsed_args['current_category'] ?>
			<?php 
				$cat = get_the_category(); 
				// echo $cat[0]->cat_ID; 
			?>
		</div>
	<?php endwhile;
    wp_reset_postdata();
}
?>

<?php
function get_all_posts($category_id, $from_index_value, $to_index_value) {
	$del_recent_posts = new WP_Query();
	$index = 1;
	$del_recent_posts->query('showposts=100000');
	while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
		<?php if ($index > $from_index_value && $index <= $to_index_value) {; ?>
			<div class="uxgblogs__section">
				<div class="dis--none"><?php echo $index; ?></div>
				<a class="uxgblogs__link" href="<?php esc_url(the_permalink()); ?>" title="<?php esc_html(the_title()); ?>"></a>
				<?php the_post_thumbnail('delicious-recent-thumbnails'); ?>
				<h6 class="uxgblogs__title"><?php esc_html(the_title()); ?></h6>
				<?php esc_html(the_content()); ?>
				<p class="uxgblogs__authoredby">Written By</p>
				<p class="uxgblogs__authorname"><?php the_author(); ?></p>
				<?php 
					$cat = get_the_category(); 
					// echo $cat[0]->cat_ID; 
				?>
			</div>
		<?php }; ?>
		<?php $index++; ?>
	<?php endwhile;
    wp_reset_postdata();
}
?>
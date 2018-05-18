<?php
/**
 * The main theme file
 *
 * @package WordPress
 */

get_header(); ?>

<!-- display posts -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'content' );
	endwhile;

	the_posts_pagination( array(
		'prev_text' => '&larr;',
		'next_text' => '&rarr;',
	) );
	else :
		echo '記事はありません';
	endif;

	$my_query = new WP_Query( array(
		‘post_type’     => ‘news’,
		‘post_per_page’ => ‘2’,
	) );
if ( $my_query->have_posts() ) :
while ( $my_query->have_posts() ) :
			$my_query->the_post();
			the_content();
endwhile;
endif;
	wp_reset_postdata();
	?>

<?php
get_footer();

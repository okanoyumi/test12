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
	?>

<?php
get_footer();

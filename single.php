<?php
/**
 * Single post pages
 *
 * @package WordPress
 */

get_header(); ?>

<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'content' );

	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	the_post_navigation( array(
		'prev_text' => '&lt;&lt; %title',
		'next_text' => '%title &gt;&gt;',
	) );
endwhile;
?>
<?php
get_footer();

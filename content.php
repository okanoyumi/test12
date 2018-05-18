<?php
/**
 * Display posts
 *
 * @package WordPress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_single() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	?>
	<?php the_post_thumbnail(); ?>
	<?php the_content( '読む' ); ?>
	<?php the_tags( '' ); ?>
</article>

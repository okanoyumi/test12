<?php
/**
 * Navigation
 *
 * @package WordPress
 */

?>
<nav>
<?php
wp_nav_menu( array(
	'theme_location'  => 'top',
	'conteiner_class' => 'manu-container',
	'menu_id'         => 'top-menu',
) );
?>
</nav>

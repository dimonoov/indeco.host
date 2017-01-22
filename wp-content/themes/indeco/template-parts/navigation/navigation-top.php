<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>



<?php wp_nav_menu( array(
	'theme_location' => 'top',
	'menu_id'        => 'top-menu',


	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',

	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="collapse nav navbar-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
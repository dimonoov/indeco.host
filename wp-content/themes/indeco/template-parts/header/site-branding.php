<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="row">
	<div class="col-sm-12">
		<div class="wrap-content bg-pic site-branding clearfix">
			<div class="col-sm-9">
				<div class="text-content">
					<h2 class="h2"><?php bloginfo( 'name' ); ?>Инновационные ответы на потребности современного рынка</h2>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident voluptatum odit molestiae vel hic explicabo numquam dolor quia earum commodi, temporibus alias ducimus, sint odio laborum perspiciatis dignissimos rerum consectetur velit excepturi fuga nisi ut repellendus dolore. Unde eligendi tenetur, at reprehenderit? Esse eum laudantium, corrupti exercitationem, itaque sed atque. </p>-->
<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident voluptatum odit molestiae vel hic explicabo numquam dolor quia earum commodi, temporibus alias ducimus, sint odio laborum perspiciatis dignissimos rerum consectetur velit excepturi fuga nisi ut repellendus dolore. Unde eligendi tenetur, at reprehenderit? Esse eum laudantium, corrupti exercitationem, itaque sed atque. </p>-->
				</div>
			</div>
			<div class="col-sm-3">

			</div>
			<div class="col-sm-12">
				<div class="btn-wrap">
					<a href="#" class="button hist">История компании</a>
<!--					<a href="#content" class="menu-scroll-down">--><?php //echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><!--<span class="screen-reader-text">--><?php //_e( 'Scroll down to content', 'twentyseventeen' ); ?><!--</span></a>-->
				</div>

			</div>
		</div>
	</div>


</div>

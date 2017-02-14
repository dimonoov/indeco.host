<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

	session_start() ;
	if(isset($_GET['remove_item'])){
        remove_from_cart($_GET['remove_item']);
        //header('Location: ' . $_SERVER["SERVER_NAME"]. $_SERVER["REQUEST_URI"]);
    }

	//print_r(parse_url('http://forum.php.su/post.php?action=new&forum=71'));

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

		<title><?php bloginfo( 'title' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-wrapper">

	<div class="head-box">
		<?php if(current_user_can('administrator')){
			$style = 'style="top:32px;"';
		}?>
		<div id="menu" class="top-line default" <?php echo $style;?>>
			<nav class="navbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="navbar-header">

								<a href="#mobile-menu" class="toggle-mnu navbar-toggle" >
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span></a>
								<?php the_custom_logo(); ?>
<!--								<a class="navbar-brand" href="/"><img src="--><?php //echo get_theme_file_uri()?><!--/assets/img/logo.png" alt=""></a>-->
							</div>
							<div class="" id="bs-example-navbar-collapse-2">
								<?php if ( has_nav_menu( 'top' ) ) : ?>

									<?php echo get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

								<?php endif; ?>

								<form class="navbar-form" role="search" >
									<div class="form-group">
										<input class="form-control" placeholder="Поиск" type="text" name="s">
										<button type="submit" class="fa fa-search"></button>
									</div>
								</form>

                                <ul id="top-cart" class="cart-title">
									<?php
										if(isset($_SESSION['cart']['qty'])) $style =  'style="display:block"';
										else $style =  'style="display:none"';
									?>
                                    <li>
                                    	  <a href="/cart">
                                    	  	    <i class="fa fa-shopping-cart" aria-hidden="true"><span <?php echo $style;?>><?php echo $_SESSION['cart']['qty']?></span></i>

											<?php if(isset($_SESSION['cart']['sum'])) :?>
											<span><?php echo $_SESSION['cart']['sum']?></span> <i class="cost fa fa-rub" aria-hidden="true"></i>
											<?php else : ?>
												<span>Корзина пуста</span><i></i>
											<?php endif; ?>
										</a>
                                    </li>
                                </ul>



							</div>

						</div>
					</div>
				</div>
			</nav>
		</div>
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>


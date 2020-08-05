<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OrderMebel
 */

global $redux_demo;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="wp-content\themes\concrete-delivery\assets\img\favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="preloader" id="page-preloader">
		<div class="loader"></div>
	</div>
	<header class="d-flex">
		<div class="container d-flex justify-content-between">
			<div class="logo col-xl-2">
				<a href="/"><img src="<? echo $redux_demo['logo']['url'] ?>" width="78" height="78" alt=""></a>
			</div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'menu__items d-flex justify-content-around',
						'container_class' => 'menu col-xl-5'
					)
				);
			?>
			<div class="phone col-xl-3 d-flex justify-content-end">
				<img src="wp-content/themes/ordermebel/assets/img/phone.png" alt="">
				<p class="ml-3 telephone"><a href="tel: <? echo $redux_demo['myphone']?>"><? echo $redux_demo['myphone']?></a></p>
			</div>
		</div>
	</header>
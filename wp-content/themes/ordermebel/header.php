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
		<div class="container d-none d-lg-flex justify-content-between">
			<div class="logo col-xl-2">
				<a href="/"><img src="<?= $redux_demo['logo']['url'] ?>" width="78" height="78" alt=""></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'menu__items d-flex justify-content-around',
					'container_class' => 'menu col-xl-5 col-lg-6 ',
				)
			);
			?>
			<div class="phone col-xl-3 col-lg-4 d-flex justify-content-end">
				<img src="<?= $redux_demo['phone-img']['url'] ?>" alt="">
				<p class="ml-3 telephone"><a href="tel: <?= $redux_demo['myphone'] ?>">
						<? echo $redux_demo['myphone']?></a></p>
			</div>
		</div>
		<div class="container col-12 flex-wrap d-lg-none d-flex justify-content-between">
			<div class="logo col-6">
				<a href="/"><img src="<?= $redux_demo['logo']['url'] ?>" width="78" height="78" alt=""></a>
			</div>
			<div class="menu__burger d-flex col-6 justify-content-end">
				<svg class="ham ham6" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
					<path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
					<path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
					<path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
				</svg>
			</div>
			<div class="container body__menu flex-wrap d-none menush justify-content-center">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'menu__items',
						'container_class' => 'menu col-12',
					)
				);
				?>
				<div class="phone col-12 d-flex justify-content-center">
					<img src="<?= $redux_demo['phone-img']['url'] ?>" alt="">
					<p class="ml-3 telephone"><a href="tel: <?= $redux_demo['myphone'] ?>">
							<? echo $redux_demo['myphone']?></a></p>
				</div>
			</div>
		</div>
	</header>
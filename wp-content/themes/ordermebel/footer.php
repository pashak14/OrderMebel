<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OrderMebel
 */

global $redux_demo;

?>

<footer class="d-flex">
    <div class="container d-flex justify-content-between">
        <div class="logo col-xl-2">
            <a href="/"><img src="<? echo $redux_demo['logo']['url'] ?>" width="78" height="78" alt=""></a>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'footer-menu',
                'menu_class'     => 'menu__items d-flex justify-content-around',
                'container_class' => 'menu col-xl-5',
            )
        );
        ?>
        <div class="col-xl-2 d-flex justify-content-center">
            <div class="links">
                <a href="https://facebook.com" target="_blank" class="facebook mr-3"><img src="wp-content/themes/ordermebel/assets/img/facebook.png" alt=""></a>
                <a href="https://instagram.com/mebel_on_order" target="_blank" class="instagram"><img src="wp-content/themes/ordermebel/assets/img/instagram.png" alt=""></a>
            </div>
        </div>
        <div class="phone col-xl-3 d-flex justify-content-end">
            <img src="wp-content/themes/ordermebel/assets/img/phone.png" alt="">
            <p class="ml-3 telephone"><a href="tel: <? echo $redux_demo['myphone']?>"><? echo $redux_demo['myphone']?></a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
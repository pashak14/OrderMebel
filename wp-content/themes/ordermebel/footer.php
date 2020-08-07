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
        <div class="logo col-4 col-sm-2">
            <a href="/"><img src="<? echo $redux_demo['logo']['url'] ?>" width="78" height="78" alt=""></a>
        </div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'footer-menu',
                'menu_class'     => 'menu__items d-none d-xl-flex justify-content-around',
                'container_class' => 'menu col-xl-5',
            )
        );
        ?>
        <div class="col-xl-2 col-md-5 col-sm-3 col-6 d-flex justify-content-center">
            <div class="links">
                <a href="<?= $redux_demo['facebook-link']?>" target="_blank" class="facebook mr-3"><img src="<?= $redux_demo['facebook-img']['url']?>" alt=""></a>
                <a href="<?= $redux_demo['instagram-link']?>" target="_blank" class="instagram"><img src="<?= $redux_demo['instagram-img']['url']?>" alt=""></a>
            </div>
        </div>
        <div class="phone col-xl-3 col-md-5 col-7 d-none d-sm-flex justify-content-end">
            <img src="<?= $redux_demo['phone-img']['url']?>" alt="phone">
            <p class="ml-3 telephone"><a href="tel: <?= $redux_demo['myphone']?>"><?= $redux_demo['myphone']?></a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
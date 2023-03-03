<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="footer py-5">
    <div class="container">
        <div class="row mb-4 p-4 newsletter d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h3>Signup For Our Newsletter</h3>
                <p>Sign up to get latest articles and deals</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae sapien suscipit, fermentum libero vel
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h4>Contact Us</h4>
                <p><strong>Email:</strong> <a href="#">info@rawdisposal.com</a></p>
                <p><strong>Phone Number:</strong> <a href="#">504-877-2170</a></p>
                <h4>Headquarters</h4>
                <p>
                    5821 Lot B River Road<br>
                    Avondale, LA 70094
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h4>Our Services</h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu-one',
                            'menu_class' => 'nav flex-column menu',
                            'items_wrap' => '%3$s',
                            'fallback_cb' => false,
                            'depth' => 1,
                        )
                    );
                    ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu-two',
                            'menu_class' => 'nav flex-column menu',
                            'items_wrap' => '%3$s',
                            'fallback_cb' => false,
                            'depth' => 1,
                        )
                    );
                    ?>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">
                &copy <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?> | Designed and Developed by <a href="">Empuls3</a> | <a href="">Privacy Policy</a> | <a href="">Term Of Use</a>
            </div>
        </div>
    </div>
</div>


<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>


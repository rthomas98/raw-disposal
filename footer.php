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
                <h3><?php the_field( 'newsletter_title', 'option' ); ?></h3>
                <p><?php the_field( 'newsletter_content', 'option' ); ?></p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <?php the_field( 'newsletter_form', 'option' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $footer_logo ) : ?>
                    <?php echo wp_get_attachment_image( $footer_logo, $size, false, array('class' => 'logo mb-4') ); ?>
                <?php endif; ?>
                <p>
                    <?php the_field( 'footer_content', 'option' ); ?>
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h4>Contact Us</h4>
                <p><strong><i class="fa-sharp fa-regular fa-envelopes"></i> Email:</strong> <a href="mailto:<?php the_field( 'footer_email', 'option' ); ?>"><?php the_field( 'footer_email', 'option' ); ?></a></p>
                <p><strong><i class="fa-regular fa-phone-office"></i> Phone Number:</strong> <a href="#"><?php the_field( 'footer_phone_number', 'option' ); ?></a></p>
                <h4>Headquarters</h4>
                <p>
                    <i class="fa-sharp fa-regular fa-building"></i> <?php the_field( 'footer_address', 'option' ); ?>
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
                &copy <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?> <?php the_field( 'copyright_content', 'option' ); ?>
            </div>
        </div>
    </div>
</div>


<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>


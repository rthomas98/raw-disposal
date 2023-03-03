<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="top-bar d-sm-none d-md-block">
    <div class="container">

            <?php if ( have_rows( 'top_bar', 'option' ) ) : ?>
        <div class="row d-flex align-items-center">
                <?php while ( have_rows( 'top_bar', 'option' ) ) : the_row(); ?>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-2">
                        <p class="m-0"><?php the_sub_field( 'address' ); ?></a></p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-2">
                        <p class="m-0"><a href="mailto:<?php the_sub_field( 'email' ); ?>"><?php the_sub_field( 'email' ); ?></a></p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-2">
                        <p class="m-0"><?php the_sub_field( 'hours' ); ?></p>
                    </div>
                    <div class="top-cta col-12 col-sm-12 col-md-12 col-lg-3 p-2 text-center text-uppercase">
                            <a href="<?php the_sub_field( 'cta_link' ); ?>" class="m-0"> <?php the_sub_field( 'cta_label' ); ?></a>
                    </div>
                <?php endwhile; ?>
        </div>
            <?php endif; ?>

    </div>
</div>

<nav id="main-nav" class="main-nav navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?>">

		<!-- Your site branding in the menu -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->

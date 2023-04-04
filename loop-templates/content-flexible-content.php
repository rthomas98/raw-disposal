<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :


        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'three_image_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/three-img-header.php' );
        endif;

        if ( get_row_layout() == 'banner_with_form' ):
            include( get_stylesheet_directory() . '/acf-blocks/banner-with-form.php' );
        endif;

        if ( get_row_layout() == 'call_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/call-cta.php' );
        endif;

        if ( get_row_layout() == 'call_cta_with_image' ):
            include( get_stylesheet_directory() . '/acf-blocks/call-cta-with-image.php' );
        endif;

        if ( get_row_layout() == 'contact_block' ):
            include( get_stylesheet_directory() . '/acf-blocks/contact-block.php' );
        endif;

        if ( get_row_layout() == 'content_image_right' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-image-right.php' );
        endif;

        if ( get_row_layout() == 'four_tiles' ):
            include( get_stylesheet_directory() . '/acf-blocks/four-tiles.php' );
        endif;

        if ( get_row_layout() == 'content_image_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-image-left.php' );
        endif;

        if ( get_row_layout() == 'frequently_asked_questions' ):
            include( get_stylesheet_directory() . '/acf-blocks/frequently-asked-questions.php' );
        endif;

        if ( get_row_layout() == 'header_three_images' ):
            include( get_stylesheet_directory() . '/acf-blocks/header-three-images.php' );
        endif;

        if ( get_row_layout() == 'hero_with_three_images' ):
            include( get_stylesheet_directory() . '/acf-blocks/hero-with-three-images.php' );
        endif;

        if ( get_row_layout() == 'home_services_with_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-services-with-cta.php' );
        endif;

        if ( get_row_layout() == 'how_it_works' ):
            include( get_stylesheet_directory() . '/acf-blocks/how-it-works.php' );
        endif;

        if ( get_row_layout() == 'purple_background_image_right' ):
            include( get_stylesheet_directory() . '/acf-blocks/purple-background-image-right.php' );
        endif;

        if ( get_row_layout() == 'services_block' ):
            include( get_stylesheet_directory() . '/acf-blocks/services-block.php' );
        endif;

        if ( get_row_layout() == 'simple_hero' ):
            include( get_stylesheet_directory() . '/acf-blocks/simple-hero.php' );
        endif;

        if ( get_row_layout() == 'team_block' ):
            include( get_stylesheet_directory() . '/acf-blocks/team-block.php' );
        endif;

        if ( get_row_layout() == 'testimonials' ):
            include( get_stylesheet_directory() . '/acf-blocks/testimonials.php' );
        endif;

        if ( get_row_layout() == 'three_box_section' ):
            include( get_stylesheet_directory() . '/acf-blocks/three-box-section.php' );
        endif;

        if ( get_row_layout() == 'three_purple_tabs_blocks' ):
            include( get_stylesheet_directory() . '/acf-blocks/three-purple-tabs-blocks.php' );
        endif;

    endwhile;
endif;
?>
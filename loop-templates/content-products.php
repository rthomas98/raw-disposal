<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="product-title py-5">
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
            <div class="row d-flex align-items-center mb-5">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php $product_images_images = get_field( 'product_images' ); ?>
                    <?php if ( $product_images_images ) :  ?>
                        <div id="carouselExampleDark" class="carousel carousel-dark slide">
                            <div class="carousel-indicators">
                                <?php foreach ( $product_images_images as $index => $product_images_image ): ?>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $index; ?>" <?php if ($index == 0) echo 'class="active" aria-current="true"'; ?> aria-label="Slide <?php echo $index + 1; ?>"></button>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach ( $product_images_images as $index => $product_images_image ): ?>
                                    <div class="carousel-item <?php if ($index == 0) echo 'active'; ?>" data-bs-interval="10000">
                                        <img src="<?php echo esc_url( $product_images_image['url'] ); ?>" class="d-block w-100" alt="<?php echo esc_attr( $product_images_image['alt'] ); ?>" />

                                        <div class="carousel-caption d-none d-md-block">
                                            <p><?php echo esc_html( $product_images_image['caption'] ); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">

                   <h2>
                       <?php the_title(); ?>
                   </h2>

                    <?php the_field( 'short_description' ); ?>

                    <p class="mt-5">
                        <a href="<?php echo site_url('/frequently-asked-questions'); ?>" class="btn btn-secondary btn-lg">
                            Have More Questions?
                        </a>
                    </p>


                </div>
            </div>
            <div class="container mb-4">
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Specifications</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active py-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <?php the_field( 'details' ); ?>
                            </div>
                            <div class="tab-pane fade py-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <?php the_field( 'features' ); ?>
                            </div>
                            <div class="tab-pane fade py-4" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Measurement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ( have_rows( 'specifications' ) ) : ?>
                                        <?php $count = 1; // Initialize counter ?>
                                        <?php while ( have_rows( 'specifications' ) ) : the_row(); ?>
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><?php the_sub_field( 'description' ); ?></td>
                                                <td><?php the_sub_field( 'measurement' ); ?></td>
                                            </tr>
                                            <?php $count++; // Increment counter ?>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="3">No specifications found.</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php if ( have_rows( 'product_cta' ) ) : ?>
    <div class="product-cta">
        <?php while ( have_rows( 'product_cta' ) ) : the_row(); ?>
            <div class="container py-5">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h2>
                            <?php the_sub_field( 'title' ); ?>
                        </h2>
                        <p class="lead">
                            <?php the_sub_field( 'sub_title' ); ?>
                        </p>

                        <?php the_sub_field( 'description' ); ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <?php the_sub_field( 'form' ); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

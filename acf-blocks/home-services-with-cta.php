<section class="home-services-cta p-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-4 col-lg-5">
                <p class="lead m-0">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-5 m-0">
                    <?php the_sub_field( 'header' ); ?>
                </h2>

            </div>
            <div class="col-sm-12 col-md-4 col-lg-5">
                <?php the_sub_field( 'content' ); ?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-2">
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-secondary btn-block btn-lg pull-right" href="<?php echo esc_url( $button_link); ?>"><?php the_sub_field( 'button_label' ); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <?php if ( have_rows( 'box' ) ) : ?>
        <div class="row services-slots mt-4">
            <?php while ( have_rows( 'box' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-4 col-lg-3 p-4">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
                    <h3><?php the_sub_field( 'title' ); ?></h3>
                    <?php the_sub_field( 'content' ); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>


    </div>
</section>
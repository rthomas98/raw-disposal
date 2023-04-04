<section class="how-it-works py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <?php if ( have_rows( 'box' ) ) : ?>
        <div class="row mb-5">
            <?php while ( have_rows( 'box' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>
                <h3><?php the_sub_field( 'title' ); ?></h3>
                <p><?php the_sub_field( 'content' ); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>

        <div class="row">
            <div class="col text-center">

                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a href="<?php echo esc_url( $button_link); ?>" class="btn btn-lg btn-primary text-uppercase">
                        <?php the_sub_field( 'button_label' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>
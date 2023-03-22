<section class="call-cta py-4">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1">
                <i class="fa-sharp fa-regular fa-truck-fast"></i>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2>
                    <?php the_sub_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">

                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="<?php echo esc_url( $button_link); ?>" class="btn btn-lg btn-primary pull-right text-uppercase"><?php the_sub_field( 'button_label' ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
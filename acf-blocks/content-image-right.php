<section class="content-img-left p-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-5">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
                <?php the_sub_field( 'content' ); ?>


            </div>
        </div>
    </div>
</section>
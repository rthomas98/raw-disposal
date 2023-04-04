<section class="three-img-header py-5">
    <div class="container">
        <div class="row d-flex align-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="row d-flex align-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                        <?php $image_one = get_sub_field( 'image_one' ); ?>
                        <?php $size = 'custom-size'; ?>
                        <?php if ( $image_one ) : ?>
                            <?php echo wp_get_attachment_image( $image_one, $size ); ?>
                        <?php endif; ?>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">

                        <?php $image_two = get_sub_field( 'image_two' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image_two ) : ?>
                            <?php echo wp_get_attachment_image( $image_two, $size, array('class' => 'mb-3' ) ); ?>
                        <?php endif; ?>

                        <?php $image_three = get_sub_field( 'image_three' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image_three ) : ?>
                            <?php echo wp_get_attachment_image( $image_three, $size ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
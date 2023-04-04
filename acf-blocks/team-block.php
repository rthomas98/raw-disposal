<section class="container team py-5">
    <div class="row d-flex align-items-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
            <h2 class="display-4">
                <?php the_sub_field( 'header' ); ?>
            </h2>
            <p>
                <?php the_sub_field( 'content' ); ?>
            </p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <?php if ( have_rows( 'member' ) ) : ?>
            <div class="row">
                <?php while ( have_rows( 'member' ) ) : the_row(); ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <?php $member_image = get_sub_field( 'member_image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $member_image ) : ?>
                        <?php echo wp_get_attachment_image( $member_image, $size ); ?>
                    <?php endif; ?>
                    <?php the_sub_field( 'member_name' ); ?>
                    <?php the_sub_field( 'member_position' ); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>
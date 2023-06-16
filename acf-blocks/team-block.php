<section class="container team py-5">
    <div class="row d-flex align-items-center mb-5">
        <div class="col">
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
    </div>
    <div class="row text-center">
        <?php if ( have_rows( 'member' ) ) : ?>
            <?php while ( have_rows( 'member' ) ) : the_row(); ?>
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="member-block bg-white rounded shadow-sm py-5 px-4">
                        <?php $member_image = get_sub_field( 'member_image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $member_image ) : ?>
                            <?php echo wp_get_attachment_image( $member_image, $size, "", array( "class" => "img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" ) ); ?>
                        <?php endif; ?>
                        <h5 class="mb-0"><?php the_sub_field( 'member_name' ); ?></h5>
                        <span class="small text-uppercase text-muted"><?php the_sub_field( 'member_position' ); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>
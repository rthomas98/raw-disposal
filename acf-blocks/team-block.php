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
        <?php if ( have_rows( 'member' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'member' ) ) : the_row(); ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team">
                    <div class="team-avatar">
                        <?php $member_image = get_sub_field( 'member_image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $member_image ) : ?>
                            <?php echo wp_get_attachment_image( $member_image, $size ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="team-info p-4">
                        <h5 class="mb-0"><?php the_sub_field( 'member_name' ); ?></h5>
                        <span class="team-position"> <?php the_sub_field( 'member_position' ); ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>
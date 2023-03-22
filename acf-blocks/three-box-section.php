<section class="three-box py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2>
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>
        <?php if ( have_rows( 'box' ) ) : ?>
        <div class="row d-flex align-items-center">
            <?php while ( have_rows( 'box' ) ) : the_row(); ?>
            <div class="col-as col-sm-12 col-md-12 col-lg-4">
                <?php if ( get_sub_field( 'background_image' ) ) : ?>
                    <img class="mb-3" src="<?php the_sub_field( 'background_image' ); ?>" />
                <?php endif ?>
                <h3>
                    <?php the_sub_field( 'title' ); ?>
                </h3>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>

            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>
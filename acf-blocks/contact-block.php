<section class="contact-header py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h1>

                <?php the_sub_field( 'content' ); ?>

                <?php the_sub_field( 'form' ); ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-4">

                <?php if ( have_rows( 'info' ) ) : ?>
                    <?php while ( have_rows( 'info' ) ) : the_row(); ?>
                        <?php the_sub_field( 'content' ); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
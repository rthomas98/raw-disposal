<section class="banner-with-form py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub-header' ); ?>
                </p>
                <h2 class="display-3">
                    <?php the_sub_field( 'header' ); ?>
                </h2>

                <?php the_sub_field( 'description' ); ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php the_sub_field( 'form' ); ?>
            </div>
        </div>
    </div>
</section>
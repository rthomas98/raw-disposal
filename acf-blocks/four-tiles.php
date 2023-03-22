<section class="four-tiles">
    <div class="row m-0">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
            <?php if ( get_sub_field( 'top_background_image' ) ) : ?>
                <img src="<?php the_sub_field( 'top_background_image' ); ?>" />
            <?php endif ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="tile-p p-5 d-flex align-items-center">
                <div>
                    <?php if ( get_sub_field( 'top_icon' ) ) : ?>
                        <?php the_sub_field( 'top_icon' ); ?>
                    <?php endif ?>
                    <?php if ( get_sub_field( 'top_title' ) ) : ?>
                        <h2><?php the_sub_field( 'top_title' ); ?></h2>
                    <?php endif ?>
                    <?php if ( get_sub_field( 'top_content' ) ) : ?>
                        <p class="lead"><?php the_sub_field( 'top_content' ); ?></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-center m-0">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="tile-p p-5 d-flex align-items-center">
                <div>
                    <?php if ( get_sub_field( 'bottom_icon' ) ) : ?>
                        <?php the_sub_field( 'bottom_icon' ); ?>
                    <?php endif ?>
                    <?php if ( get_sub_field( 'bottom_title' ) ) : ?>
                        <h2><?php the_sub_field( 'bottom_title' ); ?></h2>
                    <?php endif ?>
                    <?php if ( get_sub_field( 'bottom_content' ) ) : ?>
                        <p class="lead"><?php the_sub_field( 'bottom_content' ); ?></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
            <?php if ( get_sub_field( 'botton_background_image' ) ) : ?>
                <img src="<?php the_sub_field( 'botton_background_image' ); ?>" />
            <?php endif ?>
        </div>
    </div>
</section>
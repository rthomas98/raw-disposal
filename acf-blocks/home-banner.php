
<section class="home-banner p-2 p-sm-2 p-md-2 p-lg-5" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="container">
        <div class="row p-2 p-sm-2 p-md-2">
            <div class="col">
                <p class="lead m-0 stripe-left"><?php the_sub_field( 'sub_header' ); ?></p>
                <h1 class="m-0 display-2"><?php the_sub_field( 'header' ); ?></h1>
                <?php the_sub_field( 'content' ); ?>
            </div>
        </div>

            <?php if ( have_rows( 'tab_blocks' ) ) : ?>
                <div class="row p-5 home-tabs">
                <?php while ( have_rows( 'tab_blocks' ) ) : the_row(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <?php the_sub_field( 'icon' ); ?>
                    <h2><?php the_sub_field( 'title' ); ?></h2>
                    <p><?php the_sub_field( 'content' ); ?></p>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>
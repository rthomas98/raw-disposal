
<?php if ( get_sub_field( 'background_image' ) ) : ?>
    <img src="<?php the_sub_field( 'background_image' ); ?>" />
<?php endif ?>
<p class="lead">
    <?php the_sub_field( 'sub_header' ); ?>
</p>
<h1><?php the_sub_field( 'header' ); ?></h1>

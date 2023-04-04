<section class="purple-background-img-right py-5">
    <div class="container-fluid">
       <div class="row d-flex align-items-center">
           <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-5">
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
               <?php $image = get_sub_field( 'image' ); ?>
               <?php $size = 'full'; ?>
               <?php if ( $image ) : ?>
                   <?php echo wp_get_attachment_image( $image, $size ); ?>
               <?php endif; ?>
           </div>
       </div>
    </div>
</section>
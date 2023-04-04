<section class="faqs container py-5">
    <div class="row mb-4">
        <div class="col text-center">
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
            <h1 class="display-3">
                <?php the_sub_field( 'header' ); ?>
            </h1>
            <p>
                <?php the_sub_field( 'content' ); ?>
            </p>
        </div>
    </div>
    <div class="accordion mb-5" id="accordionExample">
        <?php if (have_rows('frequently_asked_question')): ?>
            <?php $i = 1; ?>
            <?php while (have_rows('frequently_asked_question')): the_row(); ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                        <button class="accordion-button<?php echo ($i == 1) ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $i; ?>">
                            <?php the_sub_field('question'); ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse<?php echo ($i == 1) ? ' show' : ''; ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php the_sub_field('answer'); ?>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; ?>
        <?php else: ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col text-center">
            
        </div>
    </div>

</section>
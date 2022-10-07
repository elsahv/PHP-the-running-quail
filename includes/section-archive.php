<div class="container-fluid">
        <div class="grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <div class="bg-primary card border border-dark rounded-4">
                                        <h3 class="p-1 text-light"><?php the_title(); ?></h3>
                                        <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="">
                                        <?php endif; ?>

                                        <div class="py-4 px-2">
                                                <?php the_excerpt(); ?>
                                        </div>

                                        <a class="text-light" href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                </div>


                <?php endwhile;
                else : endif; ?>
        </div>
</div>
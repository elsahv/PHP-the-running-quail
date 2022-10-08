<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <h2 class="py-4 px-1"><?php the_title(); ?></h2>

        
                <?php if (has_post_thumbnail()) : ?>
                    <img src=" <?php the_post_thumbnail_url('blog-fullscreen'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                <?php endif; ?>


                <article class="">
                    <?php the_content(); ?>
                </article>


<?php endwhile;
else : endif; ?>
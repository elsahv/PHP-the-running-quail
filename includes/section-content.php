<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <h2 class="text-dark text-center p-5"><?php the_title(); ?></h2>
        <div class="container-fluid px-5 mb-5">
            <section class="d-flex flex-wrap">

                <?php if (has_post_thumbnail()) : ?>
                    <img src=" <?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
                <?php endif; ?>


                <article class="p-5">
                    <?php the_content(); ?>
                </article>

            </section>
        </div>

<?php endwhile;
else : endif; ?>
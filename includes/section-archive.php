<div class="container-fluid">
        <div class="posts-grid mb-3">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="bg-secondary card border border-dark">
                    <div class="card-body">


                        <!-- TAGS -->
                        <div id="tags" class="py-2">
                                                <?php
                                                $tags = get_the_tags();
                                                if ($tags) :
                                                        foreach ($tags as $tag) : ?>

                                                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="px-1 text-light">
                                                                <?php echo $tag->name; ?>
                                                        </a>
                                                <?php endforeach;
                                                endif; ?>
                                                </div>


                                        <!-- IMAGE THUMBNAIL -->
                                        <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                                <?php endif; ?>
                            

                                <!-- TITLE -->
                                        <h3 class="p-1 text-light"><?php the_title(); ?></h3>


                                <!-- CATEGORY -->
                                <div class="mx-2">
                                <?php
                                $categories = get_the_category();
                                foreach ($categories as $cat) : ?>

                                    <a class="badge bg-danger text-secondary p-2 text-decoration-none" style="font-size: 18px" href="<?php echo get_category_link($cat->term_id); ?>">
                                        <?php echo $cat->name; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                                </div>
                                </div>


                <?php endwhile;
                else : endif; ?>


        </div>
        
</div>
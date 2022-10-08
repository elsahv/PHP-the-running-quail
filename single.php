<?php get_header(); ?>


<section class="grid">


  <!-- POSTS -->
  <div class="left-side">
  <div class="container">

  <h1 class="single-post-title"><?php the_title(); ?></h1>
    <p><?php echo get_the_date('l jS F, Y'); ?></p>

    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('blog-fullscreen'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>

    <article class="ps-2 pe-4">
    <?php the_content(); ?>
    </article> 

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

    <?php wp_link_pages(); ?>
  </div>



  <!-- ASIDE BAR -->
  <div class="right-side border-start border-dark border-1 py-5">
    <div class="px-5" id="aside">
      <?php if (is_active_sidebar('aside-sidebar')) : ?>
        <?php dynamic_sidebar('aside-sidebar'); ?>
      <?php endif; ?>
    </div>
  </div>
</section>




<?php get_footer(); ?>
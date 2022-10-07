<?php get_header(); ?>


<section class="grid">


  <!-- POSTS -->
  <div class="left-side">
    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('blog-fullscreen'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>


    <h1><?php the_title(); ?></h1>
    <p><?php echo get_the_date('l jS F, Y'); ?></p>
    <?php the_content(); ?>


    <?php wp_link_pages(); ?>
  </div>



  <!-- ASIDE BAR -->
  <div class="right-side bg-primary border-start border-dark border-3 py-5">
    <div class="px-5" id="aside">
      <?php if (is_active_sidebar('single-sidebar')) : ?>
        <?php dynamic_sidebar('single-sidebar'); ?>
      <?php endif; ?>
    </div>
  </div>
</section>




<?php get_footer(); ?>
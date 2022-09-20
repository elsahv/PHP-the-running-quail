  <?php get_header(); ?>

 
   <section class="single-post-wrapper">

  <?php if(has_post_thumbnail()): ?>
     <div class="post-image-wrapper">
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="single-post-img">
    </div>
    <?php endif; ?> 




    <div class="post-content-container">

    <h1 class="single-post-title"><?php the_title(); ?></h1>
    <p><?php echo get_the_date('l jS F, Y');?></p>

      <?php the_content(); ?>
    </div>


    <?php wp_link_pages(); ?>
    </div>
    </section>
 

<?php get_footer(); ?>

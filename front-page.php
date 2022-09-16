<?php get_header(); ?>

 
    <div class="featured-img" style="background-image: url(<?php echo get_theme_file_uri('/images/plants.jpg') ?>;">f</div>
    
    

  <div class="most-recent-posts-container">
  <h1 class="most-recent-posts-title" id="blog">Blog Posts</h1>   



  
  <section class="content-section">
   <!-- BLOG POSTS -->
   <?php
    while(have_posts()) {
      the_post(); ?>

    <div class="post-item">

    <?php if(has_post_thumbnail()): ?>
       <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="post-img">
      <?php endif; ?>


      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!-- <div><?php the_excerpt() ?></div> -->
    </div>
      
  <?php }
   ?>
</section>

</div>
<?php get_footer(); ?>

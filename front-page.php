<?php get_header('frontpage'); ?>

 
    <div class="frontpage-featured-img" style="background-image: url(<?php echo get_theme_file_uri('/images/plants.jpg') ?>;">f</div>
    <h1 class="frontpage-blog-title" id="blog">Recent Blog Posts</h1>   
    <section class="frontpage-wrapper">

    
      <div class="frontpage-grid">
          <?php
            while(have_posts()) { 
              the_post(); ?>
              

            <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="frontpage-post-img">
              <?php endif; ?>


              <h3 class="frontpage-post-title"><?php the_title(); ?></h3>
              
          <?php }
          ?>
</a>
</div>
</section>

<?php get_footer(); ?>

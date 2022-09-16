<?php get_header(); ?>

 

  <?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="">
   <?php endif; ?> 



    <h1><?php the_title(); ?></h1>

    <div><?php the_content(); ?></div>


    <?php wp_link_pages(); ?>

 

<?php get_footer(); ?>

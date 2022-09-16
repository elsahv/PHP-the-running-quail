<?php get_header(); ?>
 

 

<div>
<?php if ( is_active_sidebar('blog-sidebar') ):?>
  <?php dynamic_sidebar('blog-sidebar');?>
  <?php endif;?>
  </div>

 <div> 
<h1><?php echo single_cat_title();?></h1>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
    </div>
    
 

<?php get_footer(); ? >
    
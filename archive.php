<?php get_header(); ?>


<h2 class="bg-primary text-light text-center p-5"><?php echo single_cat_title(); ?></h2>
<div class="container-fluid">


  <?php get_template_part('includes/section', 'archive'); ?>



  <?php previous_posts_link(); ?>
  <?php next_posts_link(); ?>
</div>


<?php get_footer(); ?>
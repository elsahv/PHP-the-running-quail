<?php get_header(); ?>


<h2 class="bg-danger text-dark text-center p-5"><?php echo single_cat_title(); ?></h2>
<div class="container-fluid">


<section class="grid">

    <div class="left-side">
        <?php get_template_part('includes/section', 'archive'); ?>
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



  <?php previous_posts_link(); ?>
  <?php next_posts_link(); ?>
</div>


<?php get_footer(); ?>
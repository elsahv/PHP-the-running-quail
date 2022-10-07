<?php get_header('frontpage'); ?>


<section class="grid">

    <div class="left-side">
        <?php get_template_part('includes/section', 'posts'); ?>
    </div>


    <!-- ASIDE BAR -->
    <div class="right-side border-start border-dark border-1 py-5">
        <div class="px-5" id="aside">
            <?php if (is_active_sidebar('front-page-sidebar')) : ?>
                <?php dynamic_sidebar('front-page-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>


</section>

<?php get_footer(); ?>
 <!-- ASIDE WIDGET-->
 <div class="row mb-4">
     <div class="col CTA p-5" id="page-sidebar">
         <?php if (is_active_sidebar('page-sidebar')) : ?>
             <?php dynamic_sidebar('page-sidebar'); ?>
         <?php endif; ?>
     </div>
     <div class="col bg-danger">logo</div>
 </div>
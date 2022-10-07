  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Running Quail</title>
    <?php wp_head(); ?>
  </head>


  <body>
    <!-- <div class="container-fluid"> -->
    <nav class="pt-3 px-3 border-1 border-bottom border-dark">
      <div class="d-flex justify-content-between flex-wrap">
        <a class="navbar-brand" id="logo" href="/">
          <?php echo get_bloginfo('name'); ?>
        </a>

        <?php
        wp_nav_menu(
          array(
            'theme-location' => 'top-menu',
            'menu_class' => 'navbar',
          )
        );
        ?>


      </div>
    </nav>
    <!-- </div> -->
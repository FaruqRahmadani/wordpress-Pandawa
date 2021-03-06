<?php
  /*
    Template Name: Galeri
  */
?>
<?php get_header() ?>
<div id="menu-resv" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <ul>
      <?php
        $args = array(
          'theme_location'  => 'page_menu',
          'container'       => false,
          'items_wrap' => '%3$s',
        );
        if ( has_nav_menu( 'main_menu' ) ) :
          wp_nav_menu($args);
        endif;
      ?>
    </ul>
  </div>
</div>
<header>
  <div class="container">
    <div id="logo" class="pull-left">
      <img src="<?= get_template_directory_uri() ?>/img/logo1.png" alt=""/>
    </div>
    <nav class="navbar">
      <div class="container">
        <ul class="nav navbar-nav pull-right">
          <?php
            $args = array(
              'theme_location'  => 'page_menu',
              'container'       => false,
              'items_wrap' => '%3$s',
            );
            if ( has_nav_menu( 'main_menu' ) ) :
              wp_nav_menu($args);
            endif;
          ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
<div id="galeri">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title text-center">Galeri</h1>
        <ul id="album">
          <?php
            $query = new WP_Query( array(
              'category_name' => 'Galeri',
            ) );
            if( $query->have_posts() ):
              while( $query->have_posts() ): $query->the_post();
          ?>

          <li class="album-title">
            <a href="<?= the_permalink() ?>"><?= wp_trim_words(get_the_title(), 10, '') ?></a>
          </li>

          <?php
              endwhile;
            endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>

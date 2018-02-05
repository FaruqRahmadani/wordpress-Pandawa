<?php get_header() ?>
<div id="menu-resv" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <ul>
      <li><a href="index.html" class="page-scroll" onclick="closeNav()">BERANDA</a></li>
      <li><a href="#about" class="page-scroll" onclick="closeNav()">PROFIL</a></li>
      <li><a href="#mission" class="page-scroll" onclick="closeNav()">MISI</a></li>
      <li><a href="#output" class="page-scroll" onclick="closeNav()">TUJUAN</a></li>
      <li><a href="#service" class="page-scroll" onclick="closeNav()">LAYANAN</a></li>
      <li><a href="#client" class="page-scroll" onclick="closeNav()">REKANAN</a></li>
      <li><a href="#contact" class="page-scroll" onclick="closeNav()">KONTAK</a></li>
      <?php
        $args = array(
          'theme_location'  => 'main_menu',
          'container'       => false,
          'items_wrap' => '%3$s',
        );
        if ( has_nav_menu( 'main_menu' ) ) :
          wp_nav_menu($args);
        endif;
      ?>
      <li><a href="http://app.jptpandawa.co.id" class="page-scroll" onclick="closeNav()">LOGIN</a></li>
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
          <li><a href="index.html" class="page-scroll">BERANDA</a></li>
          <li><a href="#about" class="page-scroll">PROFIL</a></li>
          <li><a href="#mission" class="page-scroll">MISI</a></li>
          <li><a href="#output" class="page-scroll">TUJUAN</a></li>
          <li><a href="#service" class="page-scroll">LAYANAN</a></li>
          <li><a href="#client" class="page-scroll">REKANAN</a></li>
          <li><a href="#contact" class="page-scroll">KONTAK</a></li>
          <?php
            $args = array(
              'theme_location'  => 'main_menu',
              'container'       => false,
              'items_wrap' => '%3$s',
            );
            if ( has_nav_menu( 'main_menu' ) ) :
              wp_nav_menu($args);
            endif;
          ?>
          <li><a href="http://app.jptpandawa.co.id">LOGIN</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<section id="showslide">
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <?php
      $query = new WP_Query( array( 'category_name' => 'Slider' ) );
      if( $query->have_posts() ):
    ?>
      <ol class="carousel-indicators">
      <?php
        $index = 0;
        while( $query->have_posts() ): $query->the_post();
          if( has_post_thumbnail() ):
      ?>
        <li data-target="#myCarousel" data-slide-to="<?= $index ?>" class=" <?= $index == 0 ? 'active' : '' ?> ">
      <?php
            $index+=1;
          endif;
        endwhile;
      ?>
      </ol>

      <div class="carousel-inner">
        <?php
          $index = 0;
          while( $query->have_posts() ): $query->the_post();
            if( has_post_thumbnail() ):
        ?>
        <div class="item <?= $index == 0 ? 'active' : '' ?>">
          <img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>" style="width:100%;">
        </div>
        <?php
              $index+=1;
            endif;
          endwhile;
        endif;
        ?>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?= get_template_directory_uri() ?>/img/kontainer.jpg" alt="thumb">
      </div>
      <div class="col-md-6">
        <h1 class="title">Tentang Kami</h1>
        <p>
          <strong>PT. JPT PANDAWA KARYA BERSAMA</strong> adalah penyedia layanan logistik dan transportasi lengkap yang menawarkan pengiriman laut/udara/darat, ekspedisi, manajemen proyek/gudang, dan layanan khusus. Kami memiliki keahlian terbaik yang memungkinkan kami mempersiapkan dan memproses dokumen dan melakukan kegiatan terkait proses pengiriman barang.
        </p>
        <p>
          Dengan solusi transportasi termasuk laut/udara/darat di seluruh indonesia, serta manajemen gudang <em>(Total Logistic Management)</em>, kami dapat menciptakan solusi dengan rantai proses yang unik, yang memungkinkan anda untuk berfokus pada hal-hal yang paling penting sesuai dengan tujuan anda.
        </p>
      </div>
    </div>
  </div>
</div>

<div id="mission">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="title">Misi</h1>
        <p>Dengan orang-orang yang berkualitas dan teknologi informasi yang canggih, kami berdedikasi untuk menawarkan layanan dan jaringan logistik terbaik yang memungkinkan pelanggan kami untuk membuat keputusan yang tepat.</p>

        <p>Kami menyediakan pelanggan kami kontrol penuh dan visibilitas terbaik di kelasnya. Penghargaan kami berasal dari kepuasan pelanggan dan rekan kerja mereka dan kami berusaha untuk menjadi penghubung penting dalam kesuksesan bisnis pelanggan kami.</p>
      </div>
    </div>
  </div>
</div>

<div id="output">
  <div class="container">
    <div class="row">
      <h1 class="title text-center">Tujuan</h1>
      <div class="col-md-6">
        <p><strong>Team kami</strong><br> Tim profesional kami berusaha untuk menjadi yang terbaik di industri ini, kami menawarkan layanan pelanggan yang berkualitas tinggi</p>

        <p><strong>Layanan dan jaringan logistik</strong><br>Seluruh tim bekerja sama dan bersinergi serta menunjukan kemampuan terbaiknya dalam rangka memberikan layanan terbaik di seluruh indonesia guna kepuasan pelanggan kami.</p>

        <p><strong>Bagaimana kami membantu anda ?</strong><br>Kami menerapkan pengalaman selama bertahun-tahun, dalam menyusun proses kegiatan, metode yang teruji, analisis dan praktik untuk merancang serta menerapkan solusi terbaik yang membantu memaksimalkan perencanaan anda.</p>
      </div>
      <div class="col-md-6">
        <p><strong>Kendali visibilitas dan kontrol</strong><br>kami memberi anda visibilitas dan kontrol penuh di seluruh kegiatan.</p>

        <p><strong>Penyedia layanan terbaik</strong><br> Kami memahami bahwa anda memiliki banyak persyaratan yang memerlukan perhatian yang terbaik. Oleh karena itu kami menerapkan pengalaman metodologim dan metrik yang canggih guna memberikan anda pilihan untuk membuat keputusan terbaik.</p>

        <p><strong>Kepuasan untuk anda ?</strong><br>Kami tidak puas kecuali pelanggan, vendor dan rekanan anda puas</p>
      </div>
      </div>
    </div>
  </div>
</div>

<div id="service">
  <div class="container">
    <div class="row">
      <h1 class="title text-center">Layanan Kami</h1>
      <div class="col-md-3 col-sm-6 text-center">
        <div class="box">
          <div class="box-content">
              <img src="<?= get_template_directory_uri() ?>/img/service/darat.svg" class="img ubah" alt="Angkutan Darat">
              <hr>
              <h3 class="tag-title">Angkutan Darat</h3>
              <p>Kami menyediakan jasa pengangkutan dengan truck fuso, trailer, dll</p>
          </div>
        </div>
      </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="box">
            <div class="box-content">
              <img src="<?= get_template_directory_uri() ?>/img/service/laut.svg" class="img" alt="Angkutan Laut">
              <hr>
              <h3 class="tag-title">Angkutan Laut</h3>
              <p>Kami menyediakan jasa pengiriman barang dengan kapal laut</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="box">
            <div class="box-content">
              <img src="<?= get_template_directory_uri() ?>/img/service/kontainer.svg" class="img" alt="Jasa Kontainer">
              <hr>
              <h3 class="tag-title">Jasa Kontainer</h3>
              <p>Kami menyediakan jasa pengiriman LCL, Door to Door maupun Port to Door</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="box">
            <div class="box-content">
              <img src="<?= get_template_directory_uri() ?>/img/service/gudang.svg" class="img" alt="Pergudangan">
              <hr>
              <h3 class="tag-title">Pergudangan</h3>
              <p>Kami menyediakan jasa penyimpanan barang dan pengelolaan gudang</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div id="client">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title text-center">Rekanan</h1>
        <ul class="list-client">
          <?php
            $query = new WP_Query( array(
              'category_name' => 'Rekanan',
              'posts_per_page' => 8,
            ) );
            if( $query->have_posts() ):
              while( $query->have_posts() ): $query->the_post();
                if( has_post_thumbnail() ):
          ?>
          <li><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>"></li>
          <?php
                endif;
              endwhile;
            endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>
